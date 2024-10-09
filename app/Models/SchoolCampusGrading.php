<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class SchoolCampusGrading extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'grade','lower_limit','upper_limit','is_incomplete','is_failed','is_active','campus_id'
    ];

    public function campus()
    {
        return $this->belongsTo('App\Models\SchoolCampus', 'campus_id', 'id');
    }

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['grade','lower_limit','upper_limit','is_incomplete','is_failed','is_active','campus_id'])
        ->useLogName('Campus Grading')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
