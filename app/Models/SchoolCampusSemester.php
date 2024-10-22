<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class SchoolCampusSemester extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['academic_year','start_at','end_at','year','is_active','is_updated','semester_id','campus_id'];

    public function campus()
    {
        return $this->belongsTo('App\Models\SchoolCampus', 'campus_id', 'id');
    }

    public function semester()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'semester_id', 'id');
    }

    public function getStartAtAttribute($value)
    {
        return date('M Y', strtotime($value));
    }

    public function getEndAtAttribute($value)
    {
        return date('M Y', strtotime($value));
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
        ->logOnly(['academic_year','start_at','end_at','year','is_active','is_updated','semester_id','campus_id'])
        ->useLogName('Campus Semester')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
