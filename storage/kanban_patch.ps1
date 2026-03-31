$kanbanView = @' 
@extends('admin.layout.app') 
 
@section('content') 
<div class=\"content-body\"> 
    <div class=\"container-fluid\"> 
        <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4\"> 
            <div> 
                <h2 class=\"mb-1\">Workflow Kanban</h2> 
                <p class=\"text-muted mb-0\">Track project work by status, module, and assignee.</p> 
            </div> 
            @if (session('success')) 
                <div class=\"alert alert-success py-2 px-3 mb-0\">{{ session('success') }}</div> 
            @endif 
        </div> 
 
        <form method=\"GET\" action=\"{{ route('admin.kanban.index') }}\" class=\"card card-body mb-4 border-0 shadow-sm row g-3 align-items-end\" style=\"border-radius: 20px;\"> 
            <div class=\"col-xl-4 col-md-6\"> 
                <label class=\"form-label\">Project</label> 
                <select name=\"project_id\" class=\"form-control default-select\"> 
                    <option value=\"\">All Projects</option> 
                    @foreach ($projects as $project) 
                        <option value=\"{{ $project-^>id }}\" @selected($selectedProjectId === $project->id)>{{ $project->name }}</option> 
                    @endforeach 
                </select> 
            </div> 
            <div class=\"col-xl-4 col-md-6\"> 
                <label class=\"form-label\">Module</label> 
                <select name=\"module_id\" class=\"form-control default-select\"> 
                    <option value=\"\">All Modules</option> 
                    @foreach ($modules as $module) 
                        <option value=\"{{ $module-^>id }}\" @selected($selectedModuleId === $module->id)>{{ $module->name }}</option> 
                    @endforeach 
                </select> 
            </div> 
            <div class=\"col-xl-4 d-flex gap-2 flex-wrap\"> 
                <button type=\"submit\" class=\"btn btn-primary\">Apply Filters</button> 
                <a href=\"{{ route('admin.kanban.index') }}\" class=\"btn btn-outline-secondary\">Reset</a> 
            </div> 
        </form>
 
        <div class=\"kanban-board\" style=\"display: grid; grid-template-columns: repeat(5, minmax(280px, 1fr)); gap: 1rem; overflow-x: auto; padding-bottom: 1rem;\"> 
            @foreach ($statuses as $status) 
                @php($columnTasks = $tasksByStatus[$status->id] ?? collect()) 
                <section class=\"kanban-column\" style=\"background: #f8fafc; border: 1px solid #dbe4f0; border-radius: 20px; min-height: 520px;\"> 
                    <div class=\"p-3 border-bottom d-flex align-items-center gap-2\"> 
                        <span style=\"width: 12px; height: 12px; border-radius: 999px; display: inline-block; background: {{ $status-^>color ?: '#94a3b8' }};\"></span> 
                        <div> 
                            <h4 class=\"mb-0\">{{ $status->name }}</h4> 
                            <small class=\"text-muted\">{{ $columnTasks->count() }} task(s)</small> 
                        </div> 
                    </div> 
                    <div class=\"p-3 d-flex flex-column gap-3\"> 
                        @forelse ($columnTasks as $task) 
                            <article class=\"p-3 bg-white border rounded-4 shadow-sm\"> 
                                <div class=\"d-flex justify-content-between align-items-start gap-2 mb-2\"> 
                                    <h5 class=\"mb-0\">{{ $task->title }}</h5> 
                                    <span class=\"badge light badge-secondary\">#{{ $task->id }}</span> 
                                </div> 
                                <div class=\"small text-muted mb-2\">Project: {{ $task->module?->project?->name ?? 'N/A' }}</div> 
                                <div class=\"small text-muted mb-2\">Module: {{ $task->module?->name ?? 'N/A' }}</div> 
                                <div class=\"small text-muted mb-2\">Assignee: {{ $task->assignee?->name ?? 'Unassigned' }}</div> 
                                @if ($task->description) 
                                    <p class=\"mb-3 fs-13\">{{ \Illuminate\Support\Str::limit($task->description, 130) }}</p> 
                                @endif 
                                <form method=\"POST\" action=\"{{ route('admin.kanban.tasks.status.update', $task) }}\"> 
                                    @csrf 
                                    <label class=\"form-label small text-muted\">Move To</label> 
                                    <select name=\"status_id\" class=\"form-control mb-2\"> 
                                        @foreach ($statuses as $moveStatus) 
                                            <option value=\"{{ $moveStatus-^>id }}\" @selected($moveStatus->id === $task->status_id)>{{ $moveStatus->name }}</option> 
                                        @endforeach 
                                    </select> 
                                    <textarea name=\"comment\" rows=\"2\" class=\"form-control mb-3\" placeholder=\"Optional activity note\"></textarea> 
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm w-100\">Update Status</button> 
                                </form>
                            </article> 
                        @empty 
                            <div class=\"p-3 bg-white border rounded-4 text-center text-muted\">No tasks in this stage yet.</div> 
                        @endforelse 
                    </div> 
                </section> 
            @endforeach 
        </div> 
    </div> 
</div> 
@endsection 
'@ 
Set-Content -Path 'resources\views\admin\kanban\index.blade.php' -Value $kanbanView 
 
$workflowSeeder = @' 
<?php 
 
namespace Database\Seeders; 
 
use App\Models\Admin; 
use App\Models\Module; 
use App\Models\Project; 
use App\Models\Status; 
use App\Models\StatusTransition; 
use App\Models\Task; 
use App\Models\User; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Spatie\Permission\Models\Role; 
 
class WorkflowKanbanSeeder extends Seeder 
{ 
    public function run(): void 
    { 
        $admin = Admin::where('email', 'admin@gl-jira.com')- 
        $role = Role::findByName('system-admin', 'admin'); 
        $now = now();
 
        $taskStatuses = []; 
        foreach (['Not Started' => '#94a3b8', 'Design In Progress' => '#3b82f6', 'Development In Progress' => '#6366f1', 'Testing In Progress' => '#f59e0b', 'Done' => '#10b981'] as $name => $color) { 
            $status = Status::withTrashed()-, 'type' => 'task'], ['color' => $color, 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null, 'updated_by_id' => $admin?->id, 'updated_by_type' => $admin ? Admin::class : null]); 
            if ($status->trashed()) { $status->restore(); } 
            $taskStatuses[$name] = $status; 
        } 
 
        $moduleStatuses = []; 
        foreach (['Not Started' => '#cbd5e1', 'In Progress' => '#60a5fa', 'Ready For Testing' => '#fbbf24', 'Finished' => '#34d399'] as $name => $color) { 
            $status = Status::withTrashed()-, 'type' => 'module'], ['color' => $color, 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null, 'updated_by_id' => $admin?->id, 'updated_by_type' => $admin ? Admin::class : null]); 
            if ($status->trashed()) { $status->restore(); } 
            $moduleStatuses[$name] = $status; 
        } 
 
        StatusTransition::query()->delete(); 
        foreach ($taskStatuses as $fromStatus) { 
            foreach ($taskStatuses as $toStatus) { 
                StatusTransition::create(['from_status_id' => $fromStatus->id, 'to_status_id' => $toStatus->id, 'entity_type' => 'task', 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null]); 
            } 
        } 
        foreach ([['Not Started', 'Not Started'], ['Not Started', 'In Progress'], ['In Progress', 'In Progress'], ['In Progress', 'Ready For Testing'], ['Ready For Testing', 'Ready For Testing'], ['Ready For Testing', 'Finished'], ['Finished', 'Finished']] as [$from, $to]) { 
            StatusTransition::create(['from_status_id' => $moduleStatuses[$from]->id, 'to_status_id' => $moduleStatuses[$to]->id, 'entity_type' => 'module', 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null]); 
        } 
 
        DB::table('workflow_status_roles')->delete(); 
        DB::table('workflow_status_roles')->insert(collect(array_merge(array_values($taskStatuses), array_values($moduleStatuses)))->map(fn ($status) => ['status_id' => $status->id, 'role_id' => $role->id, 'created_at' => $now, 'updated_at' => $now])->all()); 
 
        $users = [ 
            'Asha Menon' => User::updateOrCreate(['email' => 'asha@example.com'], ['name' => 'Asha Menon', 'password' => Hash::make('password')]), 
            'Rahul Nair' => User::updateOrCreate(['email' => 'rahul@example.com'], ['name' => 'Rahul Nair', 'password' => Hash::make('password')]), 
            'Priya Shah' => User::updateOrCreate(['email' => 'priya@example.com'], ['name' => 'Priya Shah', 'password' => Hash::make('password')]), 
        ];
 
        $project = Project::updateOrCreate(['name' => 'Jira Workflow Revamp'], ['description' => 'Sample project for workflow kanban.', 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null, 'updated_by_id' => $admin?->id, 'updated_by_type' => $admin ? Admin::class : null]); 
 
        $authModule = Module::updateOrCreate(['project_id' => $project->id, 'name' => 'Authentication'], ['description' => 'Admin authentication, guards, and permissions.', 'status_id' => $moduleStatuses['In Progress']->id, 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null, 'updated_by_id' => $admin?->id, 'updated_by_type' => $admin ? Admin::class : null]); 
        $workflowModule = Module::updateOrCreate(['project_id' => $project->id, 'name' => 'Workflow Engine'], ['description' => 'Statuses, transitions, and activity tracking.', 'status_id' => $moduleStatuses['Ready For Testing']->id, 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null, 'updated_by_id' => $admin?->id, 'updated_by_type' => $admin ? Admin::class : null]); 
        $reportingModule = Module::updateOrCreate(['project_id' => $project->id, 'name' => 'Reporting'], ['description' => 'Board insights and summary widgets.', 'status_id' => $moduleStatuses['Not Started']->id, 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null, 'updated_by_id' => $admin?->id, 'updated_by_type' => $admin ? Admin::class : null]); 
 
        $taskData = [ 
            [$authModule, 'Review admin guard middleware', 'Confirm login, logout, and remember-me behavior for admins.', 'Design In Progress', $users['Asha Menon']], 
            [$authModule, 'Add permission checks to admin routes', 'Protect dashboard and kanban screens with system-admin role.', 'Development In Progress', $users['Rahul Nair']], 
            [$workflowModule, 'Seed workflow statuses', 'Create task and module statuses with role mapping.', 'Done', $users['Priya Shah']], 
            [$workflowModule, 'Validate transitions in service', 'Keep status changes aligned with transition rules.', 'Testing In Progress', $users['Rahul Nair']], 
            [$reportingModule, 'Plan summary widgets', 'Sketch the next dashboard reporting cards.', 'Not Started', null], 
        ]; 
 
        foreach ($taskData as [$module, $title, $description, $statusName, $assignee]) { 
            Task::updateOrCreate(['module_id' => $module->id, 'title' => $title], ['description' => $description, 'status_id' => $taskStatuses[$statusName]->id, 'assigned_to' => $assignee?->id, 'created_by_id' => $admin?->id, 'created_by_type' => $admin ? Admin::class : null, 'updated_by_id' => $admin?->id, 'updated_by_type' => $admin ? Admin::class : null]); 
        } 
    } 
} 
'@ 
Set-Content -Path 'database\seeders\WorkflowKanbanSeeder.php' -Value $workflowSeeder
 
$databaseSeeder = @' 
<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
 
class DatabaseSeeder extends Seeder 
{ 
    use WithoutModelEvents; 
 
    public function run(): void 
    { 
        $this->call([ 
            AdminRolePermissionSeeder::class, 
            WorkflowKanbanSeeder::class, 
        ]); 
    } 
} 
'@ 
Set-Content -Path 'database\seeders\DatabaseSeeder.php' -Value $databaseSeeder 
 
$layout = Get-Content 'resources\views\admin\layout\app.blade.php' -Raw 
$layout = $layout.Replace('                            <li><a href=\"#\">Projects</a></li>', \"                            ^<li^>^<a href=\\\"{{ route('admin.dashboard') }}\\\"^>Overview^</a^>^</li^>`r`n                            ^<li^>^<a href=\\\"{{ route('admin.kanban.index') }}\\\"^>Workflow Kanban^</a^>^</li^>\") 
Set-Content -Path 'resources\views\admin\layout\app.blade.php' -Value $layout 
 
$kanbanController = Get-Content 'app\Http\Controllers\Admin\KanbanController.php' -Raw 
$kanbanController = $kanbanController.Replace(\"return back()-^>with('success', 'Task status updated successfully.');\", \"return redirect()-^>route('admin.kanban.index')-^>with('success', 'Task status updated successfully.');\") 
Set-Content -Path 'app\Http\Controllers\Admin\KanbanController.php' -Value $kanbanController 
 
$statusSeederPath = 'database\seeders\StatusSeeder.php' 
if (Test-Path $statusSeederPath) { Remove-Item $statusSeederPath }
