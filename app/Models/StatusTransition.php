<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusTransition extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'from_status_id',
        'to_status_id',
        'entity_type',
        'created_by_id',
        'created_by_type',
        'updated_by_id',
        'updated_by_type',
    ];

    public function fromStatus()
    {
        return $this->belongsTo(Status::class, 'from_status_id');
    }

    public function toStatus()
    {
        return $this->belongsTo(Status::class, 'to_status_id');
    }
}
