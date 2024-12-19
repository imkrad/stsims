<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class ListProgram extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name','others','is_sub','is_active','program_id','type_id'
    ];

    public function program()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'program_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'type_id', 'id');
    }

    public function scholar()
    {
        return $this->hasMany('App\Models\Scholar', 'program_id');
    } 

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
            ->logOnly(['name','others','is_sub','is_active','program_id','type_id'])
            ->useLogName('Scholar')
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs(); 
    }
}
