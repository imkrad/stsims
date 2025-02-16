<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class SchoolCampusCourse extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'type','years','course_id','campus_id','is_active'
    ];

    public function certifications()
    {
        return $this->hasMany('App\Models\SchoolCampusCourseCertification', 'course_id');
    } 

    public function prospectuses()
    {
        return $this->hasMany('App\Models\SchoolCampusCourseProspectus', 'course_id');
    } 

    public function course()
    {
        return $this->belongsTo('App\Models\ListCourse', 'course_id', 'id');
    }

    public function campus()
    {
        return $this->belongsTo('App\Models\SchoolCampus', 'campus_id', 'id');
    }

    public function hasActiveProspectus()
    {
        return $this->prospectuses()->where('is_active', 1)->exists();
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
        ->logOnly(['type','years','course_id','campus_id','is_active'])
        ->useLogName('Course')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
