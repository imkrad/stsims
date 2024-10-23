<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarCourse extends Model
{
    use HasFactory;

    protected $fillable = ['information','course_id','scholar_id'];

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\SchoolCampusCourse', 'course_id', 'id');
    }
}
