<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class SchoolCampusName extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['name','campus_id'];

    public function campus()
    {
        return $this->belongsTo('App\Models\SchoolCampus', 'campus_id', 'id');
    }

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['name','campus_id'])
        ->useLogName('Campus Name')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
