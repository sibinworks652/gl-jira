@extends('admin.layout.app') 
@section('content') 
<div class="content-body"> 
    <div class="container-fluid"> 
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4"> 
            <div> 
                <h2 class="mb-1">Workflow Kanban</h2> 
                <p class="text-muted mb-0">Track project work by status, module, and assignee.</p> 
            </div> 
            @if (session('success')) 
                <div class="alert alert-success py-2 px-3 mb-0">{{ session('success') }}</div> 
            @endif 
        </div> 
        <form method="GET" action="{{ route('admin.kanban.index') }}" class="card card-body mb-4 border-0 shadow-sm row g-3 align-items-end" style="border-radius:20px;"> 
            <div class="col-xl-4 col-md-6"> 
                <label class="form-label">Project</label> 
                <select name="project_id" class="form-control default-select"> 
                    <option value="">All Projects</option> 
                    @foreach ($projects as $project) 
                        <option value="{{ $project->id }}" @selected($selectedProjectId === $project->id)>{{ $project->name }}</option> 
                    @endforeach 
                </select> 
            </div> 
            <div class="col-xl-4 col-md-6"> 
                <label class="form-label">Module</label> 
                <select name="module_id" class="form-control default-select"> 
                    <option value="">All Modules</option> 
                    @foreach ($modules as $module) 
                        <option value="{{ $module->id }}" @selected($selectedModuleId === $module->id)>{{ $module->name }}</option> 
                    @endforeach 
                </select> 
            </div> 
            <div class="col-xl-4 d-flex gap-2 flex-wrap"> 
                <button type="submit" class="btn btn-primary">Apply Filters</button> 
                <a href="{{ route('admin.kanban.index') }}" class="btn btn-outline-secondary">Reset</a> 
            </div> 
        </form>
        <div class="kanban-board" style="display:grid;grid-template-columns:repeat(5,minmax(280px,1fr));gap:1rem;overflow-x:auto;padding-bottom:1rem;"> 
            @foreach ($statuses as $status) 
                @php($columnTasks = $tasksByStatus[$status->id] ?? collect()) 
                <section class="kanban-column" style="background:#f8fafc;border:1px solid #dbe4f0;border-radius:20px;min-height:520px;"> 
                    <div class="p-3 border-bottom d-flex align-items-center gap-2"> 
                        <span style="width:12px;height:12px;border-radius:999px;display:inline-block;background:{{ $status->color ?: '#94a3b8' }};"></span> 
                        <div> 
                            <h4 class="mb-0">{{ $status->name }}</h4> 
                            <small class="text-muted">{{ $columnTasks->count() }} task(s)</small> 
                        </div> 
                    </div> 
                    <div class="p-3 d-flex flex-column gap-3"> 
                        @forelse ($columnTasks as $task) 
                            <article class="p-3 bg-white border rounded-4 shadow-sm"> 
                                <div class="d-flex justify-content-between align-items-start gap-2 mb-2"> 
                                    <h5 class="mb-0">{{ $task->title }}</h5> 
                                    <span class="badge light badge-secondary">#{{ $task->id }}</span> 
                                </div> 
                                <div class="small text-muted mb-2">Project: {{ $task->module?->project?->name ?? 'N/A' }}</div> 
                                <div class="small text-muted mb-2">Module: {{ $task->module?->name ?? 'N/A' }}</div> 
                                <div class="small text-muted mb-2">Assignee: {{ $task->assignee?->name ?? 'Unassigned' }}</div> 
                                @if ($task->description) 
                                    <p class="mb-3 fs-13">{{ \Illuminate\Support\Str::limit($task->description, 130) }}</p> 
                                @endif
                                <form method="POST" action="{{ route('admin.kanban.tasks.status.update', $task) }}"> 
                                    @csrf 
                                    <label class="form-label small text-muted">Move To</label> 
                                    <select name="status_id" class="form-control mb-2"> 
                                        @foreach ($statuses as $moveStatus) 
                                            <option value="{{ $moveStatus->id }}" @selected($moveStatus->id === $task->status_id)>{{ $moveStatus->name }}</option> 
                                        @endforeach 
                                    </select> 
                                    <textarea name="comment" rows="2" class="form-control mb-3" placeholder="Optional activity note"></textarea> 
                                    <button type="submit" class="btn btn-primary btn-sm w-100">Update Status</button> 
                                </form> 
                            </article> 
                        @empty 
                            <div class="p-3 bg-white border rounded-4 text-center text-muted">No tasks in this stage yet.</div> 
                        @endforelse 
                    </div> 
                </section> 
            @endforeach 
        </div> 
    </div> 
</div> 
@endsection
