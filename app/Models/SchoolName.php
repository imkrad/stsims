<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class SchoolName extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['name'];

    public function school()
    {
        return $this->belongsTo('App\Models\School', 'school_id', 'id');
    }

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['name'])
        ->useLogName('School Name')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
