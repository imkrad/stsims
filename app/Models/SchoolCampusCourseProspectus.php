<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class SchoolCampusCourseProspectus extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'subjects','school_year','is_completed','is_active','is_locked','course_id'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\SchoolCampusCourse', 'course_id', 'id');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['subjects','school_year','is_completed','is_active','is_locked','course_id'])
        ->useLogName('Prospectus')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
