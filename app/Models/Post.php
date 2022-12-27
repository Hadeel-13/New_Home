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
   

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
    public function likes_count(){
        return $this->hasMany(Like::class)->where('like','=',1);
    }
    public function dislikes_count(){
        return $this->hasMany(Like::class)->where('like','=',0);
    }
  
}
