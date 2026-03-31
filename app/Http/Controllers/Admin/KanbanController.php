<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Module;
use App\Models\Project;
use App\Models\Status;
use App\Models\Task;
use App\Service\WorkflowService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class KanbanController extends Controller
{
    public function __construct(private readonly WorkflowService $workflowService)
    {
    }

    public function index(Request $request): View
    {
        $projects = Project::orderBy('name')->get();
        $selectedProjectId = $request->integer('project_id');
        $selectedModuleId = $request->integer('module_id');

        $moduleQuery = Module::query();
        if ($selectedProjectId) { $moduleQuery->where('project_id', $selectedProjectId); }
        $modules = $moduleQuery->orderBy('name')->get();

        $statuses = Status::where('type', 'task')->orderBy('id')->get();

        $taskQuery = Task::with(['status', 'module.project', 'assignee']);
        if ($selectedModuleId) {
            $taskQuery->where('module_id', $selectedModuleId);
        } elseif ($selectedProjectId) {
            $taskQuery->whereIn('module_id', $modules->pluck('id'));
        }
        $tasks = $taskQuery->orderByDesc('updated_at')->get();

        $tasksByStatus = $statuses->mapWithKeys(function (Status $status) use ($tasks) {
            return [$status->id => $tasks->where('status_id', $status->id)->values()];
        });

        return view('admin.kanban.index', [
            'projects' => $projects,
            'modules' => $modules,
            'statuses' => $statuses,
            'tasksByStatus' => $tasksByStatus,
            'selectedProjectId' => $selectedProjectId,
            'selectedModuleId' => $selectedModuleId,
        ]);
    }

    public function updateTaskStatus(Request $request, Task $task): RedirectResponse
    {
        $validated = $request->validate([
            'status_id' => ['required', 'integer', 'exists:statuses,id'],
            'comment' => ['nullable', 'string', 'max:1000'],
        ]);

        $this->workflowService->updateTaskStatus($task, (int) $validated['status_id'], $validated['comment'] ?? null);

        return back()->with('success', 'Task status updated successfully.');
    }
}
