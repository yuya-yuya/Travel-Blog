<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
