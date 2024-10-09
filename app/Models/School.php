<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class School extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name',
        'class_id',
        'shortcut',
        'combiner',
        'avatar',
        'is_upsystem',
        'is_active'
    ];

    public function campuses()
    {
        return $this->hasMany('App\Models\SchoolCampus', 'school_id');
    } 

    public function class()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'class_id', 'id');
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
        ->logOnly(['name','class_id','shortcut','combiner','avatar','is_active'])
        ->useLogName('School')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
