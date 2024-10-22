<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentBenefit extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'month', 'privilege_id', 'amount', 'release_type', 'status_id', 'release_id', 'enrollment_id', 'attachment', 'is_reimbursed'
    ];

    public function enrollment()
    {
        return $this->belongsTo('App\Models\Enrollment', 'enrollment_id', 'id');
    }
    
    public function privilege()
    {
        return $this->belongsTo('App\Models\ListPrivilege', 'privilege_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\ListStatus', 'status_id', 'id');
    }

    public function getMonthAttribute($value)
    {
        return date('M Y', strtotime($value));
    }
}
