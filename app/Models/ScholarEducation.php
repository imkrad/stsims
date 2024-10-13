<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class ScholarEducation extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['graduated_year','level_id','award_id','campus_id','course_id','scholar_id'];

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\ListCourse', 'course_id', 'id');
    }

    public function campus()
    {
        return $this->belongsTo('App\Models\SchoolCampus', 'campus_id', 'id');
    }

    public function award()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'award_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'level_id', 'id');
    }

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
            ->logOnly(['graduated_year','level_id','award_id','campus_id','course_id'])
            ->useLogName('Scholar Education')
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs(); 
    }
}
