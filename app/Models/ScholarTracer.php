<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarTracer extends Model
{
    use HasFactory;

    protected $fillable = ['information','user_id','scholar_id'];

    protected $casts = [
        'information' => 'array', 
    ];

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
