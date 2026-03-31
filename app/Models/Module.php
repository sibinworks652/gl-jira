<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'name',
        'description',
        'status_id',
        'created_by_id',
        'created_by_type',
        'updated_by_id',
        'updated_by_type',
    ];

    // 🔗 Project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    // 🔗 Tasks
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // 🔗 Status
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    // 🔗 Creator
    public function creator()
    {
        return $this->morphTo('created_by');
    }

    public function updater()
    {
        return $this->morphTo('updated_by');
    }

    // 🔗 Activity logs
    public function activities()
    {
        return $this->morphMany(ActivityLog::class, 'entity', 'entity_type', 'entity_id');
    }
}