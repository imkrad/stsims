<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;

    protected $fillable = [
        'dv_no', 'batch', 'user_id', 'attachment', 'total', 'status_id', 'is_checked','is_national','agency_id', 'count'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function agency()
    {
        return $this->belongsTo('App\Models\ListAgency', 'agency_id', 'id');
    }

    public function benefits()
    {
        return $this->hasMany('App\Models\EnrollmentBenefit', 'release_id');
    } 

    public function status()
    {
        return $this->belongsTo('App\Models\ListStatus', 'status_id', 'id');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
