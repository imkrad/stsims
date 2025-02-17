<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Scholar extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['spas_id','program_id','category_id','status_id','awarded_year'];

    public function profile()
    {
        return $this->hasOne('App\Models\ScholarProfile', 'scholar_id');
    } 

    public function tracer()
    {
        return $this->hasOne('App\Models\ScholarTracer', 'scholar_id');
    } 

    public function education()
    {
        return $this->hasOne('App\Models\ScholarEducation', 'scholar_id');
    } 

    public function course()
    {
        return $this->hasOne('App\Models\ScholarCourse', 'scholar_id');
    } 

    public function address()
    {
        return $this->hasOne('App\Models\ScholarAddress', 'scholar_id');
    } 

    public function information()
    {
        return $this->hasOne('App\Models\ScholarInformation', 'scholar_id');
    } 

    public function reference()
    {
        return $this->hasOne('App\Models\ScholarReference', 'scholar_id');
    } 

    public function program()
    {
        return $this->belongsTo('App\Models\ListProgram', 'program_id', 'id');
    } 

    public function status()
    {
        return $this->belongsTo('App\Models\ListStatus', 'status_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'category_id', 'id');
    } 

    public function enrollments()
    {
        return $this->hasMany('App\Models\Enrollment', 'scholar_id')->orderBy('id','DESC');
    } 

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
            ->logOnly(['spas_id','program_id','category_id','status_id','awarded_year'])
            ->useLogName('Scholar')
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs(); 
    }
}
