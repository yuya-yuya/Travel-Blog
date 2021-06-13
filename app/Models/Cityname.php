<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cityname extends Model
{

    protected $fillable = [
        'name',
    ];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
