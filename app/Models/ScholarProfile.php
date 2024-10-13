<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class ScholarProfile extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['firstname','lastname','middlename','suffix','sex','birthday','scholar_id'];

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    protected static $recordEvents = ['updated','created'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
            ->logOnly(['firstname','lastname','middlename','suffix','sex','birthday'])
            ->useLogName('Scholar Profile')
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs(); 
    }
}
