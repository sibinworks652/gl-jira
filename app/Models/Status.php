<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Models\Role;

class Status extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'color',
        'created_by_id',
        'created_by_type',
        'updated_by_id',
        'updated_by_type',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function fromTransitions()
    {
        return $this->hasMany(StatusTransition::class, 'from_status_id');
    }

    public function toTransitions()
    {
        return $this->hasMany(StatusTransition::class, 'to_status_id');
    }

    public function workflowRoles()
    {
        return $this->belongsToMany(Role::class, 'workflow_status_roles');
    }
}
