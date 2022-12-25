<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    public function Image()
    {
        return $this->hasMany('App\Models\Image');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }


    public function Comment()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
