<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'module_id',
        'title',
        'description',
        'status_id',
        'assigned_to',
        'created_by_id',
        'created_by_type',
        'updated_by_id',
        'updated_by_type',
    ];

    // 🔗 Module
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    // 🔗 Assigned User
    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
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