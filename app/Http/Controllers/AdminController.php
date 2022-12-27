<?php

namespace App\Http\Controllers;
use App\Models\Agent;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function show_profile()
    {
        return view('dashboard.profile');
    }
    public function profile_update_show()
    {
        return view('dashboard.profile_update');
    }
    public function show_agents()
    {
         $agents=Agent::paginate(6);
        return view('dashboard.admin_agents',compact('agents'));
    }
   
    //------تابع اظهار رسائل المستخدمين-------
    public function show_messages()
    {
        $messages=Message::orderby('created_at','desc')->paginate(5);
        return view('dashboard.messages',compact('messages'));
    }
  public function index(Request $request)  
  {
    // $request->validate([
    //     'name' => ['nullable', 'string'],
    //     'email' => ['required', 'email'],
    //     'password' => ['required'],
    //   ]);
      $user = User::find($request->id);
      $user->email = $request->email;
      $user->phone = $request->phone;
      $user->password = $request->password;
      $user->name = $request->name;
      $user->save();

             return response()->json(['success' => 'تم إرسال رسالتك بنجاح']);
    }
}
