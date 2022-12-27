<?php

namespace App\Models;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    // public function receivesBroadcastNotificationsOn()
    // {
    //     return 'users.'.$this->id;
    // }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
    // علاقات المتابعة 
    // يرجع المتابعين
    public function followers()
    {
        return $this->belongsToMany(self::class, 'followers', 'followerUser_id', 'user_id')
            ->withTimestamps();
    }
    // يرجع الاشخاص يلي المستخدم تابعون
    public function follows()
    {
        return $this->belongsToMany(self::class, 'followers', 'user_id', 'followerUser_id')
            ->withTimestamps();
    }
    // 
    public function Archives()
    {
        return $this->hasMany('App\Models\Savedpost', 'user_id', 'id');

    }
    public function follow($userId)
    {
        $this->follows()->attach($userId);
        return $this;
    }

    public function unfollow($userId)
    {
        $this->follows()->detach($userId);
        return $this;
    }

    public function isFollowing($userId)
    {
        return (bool) $this->follows()->where('followerUser_id', $userId)->first(['id']);
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'user_id', 'id')->orderBy('created_at','Desc');
    }
    public function sale_posts()
    {
        return $this->hasMany('App\Models\Post', 'user_id', 'id')->where('realestate_status', 0);
    }
    public function unsale_posts()
    {
        return $this->hasMany('App\Models\Post', 'user_id', 'id')->where('realestate_status', 1);
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'user_id', 'id');
    }
    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'user_id', 'id');
    }
    public function likes()
    {
        return $this->hasMany('App\Models\Like', 'user_id', 'id');
    }
    public function Agent()
    {
        return $this->hasMany(Agent::class);
    }
    public function isSaved($postId)
    {
        return (bool) $this->Archives()->where('post_id', $postId)->first(['id']);
    }
}
