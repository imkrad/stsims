<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;

    protected $fillable = [
        'dv_no', 'batch', 'user_id', 'attachment', 'total', 'status_id', 'is_checked','is_national','agency_id'
    ];

}
