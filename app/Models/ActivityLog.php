<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'entity_type',
        'entity_id',
        'old_status',
        'new_status',
        'comment',
        'created_by_id',
        'created_by_type',
        'updated_by_id',
        'updated_by_type',
    ];

    // 🔗 Entity (Task or Module)
    public function entity()
    {
        return $this->morphTo('entity', 'entity_type', 'entity_id');
    }

    // 🔗 Status
    public function oldStatus()
    {
        return $this->belongsTo(Status::class, 'old_status');
    }

    public function newStatus()
    {
        return $this->belongsTo(Status::class, 'new_status');
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
}