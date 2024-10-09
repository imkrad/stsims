<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class SchoolCampusCourseCertification extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'start_at','end_at','course_id','certification_id','is_active'
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\SchoolCampusCourse', 'course_id', 'id');
    }

    public function certification()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'certification_id', 'id');
    }

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['start_at','end_at','certification_id','course_id','is_active'])
        ->useLogName('Certification')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
