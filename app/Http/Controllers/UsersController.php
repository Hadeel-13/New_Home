<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\UserFollowed;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('users_1', compact('users'));
    }


    public function follow(User $user)
    {
        $follower = User::find(Auth::user()->id);


        if ($follower->id == $user->id) {
            return back()->withError("You can't follow yourself");
        }
        if (!$follower->isFollowing($user->id)) {
            $follower->follow($user->id);

            // sending a notification
            $user->notify(new UserFollowed($follower));

            return back();
        }
        return back();
    }

    public function unfollow(User $user)
    {
        $follower = User::find(Auth::user()->id);
        if ($follower->isFollowing($user->id)) {
            $follower->unfollow($user->id);
            return response()->json(['status' => 200,'message'=>"أنت لم تعد صديق {$user->name} بعد الآن "]);

            // return back()->withSuccess("You are no longer friends with {$user->name}");
        }
        return back()->withError("You are not following {$user->name}");
    }
    public function notifications()
    {
        $user = User::where('id', '==',  Auth::user()->id)->get();
        return $user->unreadNotifications()->limit(5)->get()->toArray();
    }
}
