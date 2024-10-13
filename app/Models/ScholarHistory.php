<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarHistory extends Model
{
    use HasFactory;

    protected $fillable = ['type_id','modifier_id'];

    public function fromable()
    {
        return $this->morphTo();
    }

    public function toable()
    {
        return $this->morphTo();
    }

    public function scholar()
    {
        return $this->belongsTo('App\Models\Scholar', 'scholar_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'type_id', 'id');
    }

    public function modifier()
    {
        return $this->belongsTo('App\Models\User', 'modifier_id', 'id');
    }
}
