<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'code' , 'subject' , 'grade', 'unit', 'enrollment_id', 'user_id', 'options', 'is_lab', 'is_nonacademic'
    ];

    public function enrollment()
    {
        return $this->belongsTo('App\Models\Enrollment', 'enrollment_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
