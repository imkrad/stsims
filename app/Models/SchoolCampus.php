<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class SchoolCampus extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'campus',
        'shortcut',
        'is_main',
        'is_alone',
        'is_active',
        'term_id',
        'grading_id',
        'school_id',
        'agency_id'
    ];

    public function role()
    {
        return $this->morphOne('App\Models\UserRole','roleable');
    }
    
    public function grading()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'grading_id', 'id');
    }

    public function term()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'term_id', 'id');
    }

    public function school()
    {
        return $this->belongsTo('App\Models\School', 'school_id', 'id');
    }

    public function agency()
    {
        return $this->belongsTo('App\Models\ListAgency', 'agency_id', 'id');
    }

    public function address()
    {
        return $this->hasOne('App\Models\SchoolAddress', 'campus_id');
    } 

    public function names()
    {
        return $this->hasMany('App\Models\SchoolCampusName', 'campus_id');
    } 

    public function courses()
    {
        return $this->hasMany('App\Models\SchoolCampusCourse', 'campus_id');
    } 

    public function gradings()
    {
        return $this->hasMany('App\Models\SchoolCampusGrading', 'campus_id');
    } 

    public function semesters()
    {
        return $this->hasMany('App\Models\SchoolCampusSemester', 'campus_id')->orderBy('created_at','DESC');
    } 

    public function scholars()
    {
        return $this->hasMany('App\Models\ScholarEducation', 'campus_id');
    } 

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['campus','term_id','agency_id','grading_id'])
        ->useLogName('Campus')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
