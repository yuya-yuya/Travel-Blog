<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['body', 'title'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cityname()
    {
        return $this->belongsTo(Cityname::class);
    }
}
