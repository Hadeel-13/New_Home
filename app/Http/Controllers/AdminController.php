<?php

namespace App\Http\Controllers;
use App\Models\EmployeeInfo;
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
         $agents=EmployeeInfo::paginate(6);
        return view('dashboard.admin_agents',compact('agents'));
    }
    public function show_users()
    {
        $users=User::paginate(10);
        return view('dashboard.show_users',compact('users'));
    }
    //------تابع اظهار رسائل المستخدمين-------
    public function show_messages()
    {
        $messages=Message::orderby('created_at')->paginate(5);
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
