<?php

namespace App\Service;

use App\Models\ActivityLog;
use App\Models\Module;
use App\Models\Status;
use App\Models\Task;
use Exception;
use Illuminate\Support\Facades\Auth;

class WorkflowService
{
    /**
     * Update Task Status
     */
    public function updateTaskStatus(Task $task, int $newStatusId, ?string $comment = null): Task
    {
        $currentStatusId = $task->status_id;

        // 1. Validate Transition
        if (! $this->isValidTransition($currentStatusId, $newStatusId, 'task')) {
            throw new Exception('Invalid status transition');
        }

        // 2. Role Check
        if (! $this->canUserUpdate($newStatusId)) {
            throw new Exception('Unauthorized action for your role');
        }

        // 3. Update Task
        $task->update([
            'status_id' => $newStatusId,
            'updated_by_id' => $this->user()->id,
            'updated_by_type' => get_class($this->user()),
        ]);

        //  4. Log Activity
        $this->logActivity('task', $task->id, $currentStatusId, $newStatusId, $comment);

        //  5. Auto Update Module
        if ($task->module) {
            $this->updateModuleStatus($task->module);
        }

        return $task->fresh(['status', 'module.project', 'assignee']);
    }

    /**
     * Validate Transition
     */
    private function isValidTransition(int $from, int $to, string $type): bool
    {
        return \DB::table('status_transitions')
            ->where('from_status_id', $from)
            ->where('to_status_id', $to)
            ->where('entity_type', $type)
            ->exists();
    }

    /**
     * Role-based control
     */
    private function canUserUpdate(int $statusId): bool
    {
        $user = $this->user();

        return \DB::table('workflow_status_roles')
            ->where('status_id', $statusId)
            ->whereIn('role_id', $user->roles->pluck('id'))
            ->exists();
    }

    /**
     * Auto Module Status Update
     */
    private function updateModuleStatus(Module $module): void
    {
        $tasks = $module->tasks()->with('status')->get();

        if ($tasks->isEmpty()) {
            return;
        }

        $statuses = $tasks->pluck('status.name');

        if ($statuses->every(fn ($status) => $status === 'Done')) {
            $this->setModuleStatus($module, 'Finished');
            return;
        }

        if ($statuses->contains('Testing In Progress') || $statuses->contains('Done')) {
            $this->setModuleStatus($module, 'Ready For Testing');
            return;
        }

        if ($statuses->contains(fn ($status) => $status !== 'Not Started')) {
            $this->setModuleStatus($module, 'In Progress');
            return;
        }

        $this->setModuleStatus($module, 'Not Started');
    }

    /**
     * Set Module Status
     */
    private function setModuleStatus(Module $module, string $statusName): void
    {
        $status = Status::where('name', $statusName)
            ->where('type', 'module')
            ->first();

        if (! $status || (int) $module->status_id === (int) $status->id) {
            return;
        }

        $old = $module->status_id;

        $module->update([
            'status_id' => $status->id,
            'updated_by_id' => $this->user()->id,
            'updated_by_type' => get_class($this->user()),
        ]);

        $this->logActivity('module', $module->id, $old, $status->id);
    }

    /**
     * Activity Log
     */
    private function logActivity(string $type, int $id, ?int $old, int $new, ?string $comment = null): void
    {
        ActivityLog::create([
            'entity_type' => match ($type) {
                'task' => Task::class,
                'module' => Module::class,
                default => $type,
            },
            'entity_id' => $id,
            'old_status' => $old,
            'new_status' => $new,
            'comment' => $comment,
            'created_by_id' => $this->user()->id,
            'created_by_type' => get_class($this->user()),
        ]);
    }

    /**
     * Current User (Admin/User)
     */
    private function user()
    {
        if (Auth::guard('admin')->check()) {
            return Auth::guard('admin')->user();
        }

        return Auth::user();
    }

    public function getAllowedStatuses(int $currentStatusId, string $type)
    {
        $user = $this->user();

        return Status::whereIn('id', function ($query) use ($currentStatusId, $type) {
            $query->select('to_status_id')
                ->from('status_transitions')
                ->where('from_status_id', $currentStatusId)
                ->where('entity_type', $type);
        })
        ->whereIn('id', function ($query) use ($user) {
            $query->select('status_id')
                ->from('workflow_status_roles')
                ->whereIn('role_id', $user->roles->pluck('id'));
        })
        ->get();
    }
}
