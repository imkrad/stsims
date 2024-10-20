<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualifier extends Model
{
    use HasFactory;

    protected $fillable = [
        'spas_id',
        'program_id',
        'status_type',
        'status_id',
        'qualified_year',
        'information',
        'school',
        'course',
        'region'
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\QualifierProfile', 'qualifier_id');
    } 

    public function address()
    {
        return $this->hasOne('App\Models\QualifierAddress', 'qualifier_id');
    } 

    public function program()
    {
        return $this->belongsTo('App\Models\ListProgram', 'program_id', 'id');
    } 

    public function status()
    {
        return $this->belongsTo('App\Models\ListStatus', 'status_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ListStatus', 'status_type', 'id');
    }
}
