<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'semester_id', 'level_id', 'scholar_id', 'user_id','is_enrolled','is_delayed','is_checked','is_missed','is_grades_completed','is_benefits_released','is_completed','is_locked', 'attachment'
    ];

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'level_id', 'id');
    }

    public function semester()
    {
        return $this->belongsTo('App\Models\SchoolCampusSemester', 'semester_id', 'id');
    }

    public function benefits()
    {
        return $this->hasMany('App\Models\EnrollmentBenefit', 'enrollment_id');
    } 

    public function subjects()
    {
        return $this->hasMany('App\Models\EnrollmentSubject', 'enrollment_id');
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
