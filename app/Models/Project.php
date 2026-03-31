<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'created_by_id',
        'created_by_type',
        'updated_by_id',
        'updated_by_type',
    ];

    // 🔗 Creator (Admin or User)
    public function creator()
    {
        return $this->morphTo('created_by');
    }

    // 🔗 Updater
    public function updater()
    {
        return $this->morphTo('updated_by');
    }

    // 🔗 Modules
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
