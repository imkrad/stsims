<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarReference extends Model
{
    use HasFactory;

    protected $fillable = ['school','course','address','has_education','has_address','scholar_id'];

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

}
