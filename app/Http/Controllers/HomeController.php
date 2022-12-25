<?php

namespace App\Http\Controllers;
use App\Events\NewNotification;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Models\USer;
use DataTables;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // تابع لاظهار المستخدمين
    // public function users(Request $request) {
    //     if ($request->ajax()) {
    //         $data = User::all();
    //         return Datatables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function($row) {
                           
    //                     $btn = '<a href="javascript:void(0)" class="edit btn btn-info btn-sm">View</a>';

    //                     $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
    //                     $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' .$row->id. '" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem">Delete</a>';

    //                      return $btn;
                          
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //     }

    //     return view('users');
    // }
    
public function show_user_posts()
{
    $posts=Post::where('user_id','=',Auth::user()->id)->paginate(8);
    return view('posts',compact('posts'));
}
public function show_user_saved_posts()
{
    $posts = DB::table('users')
      ->join('saved_posts','saved_posts.user_id', '=', 'users.id')
      ->join('posts','saved_posts.post_id', '=', 'posts.id')
      ->leftjoin('residential-details','residential-details.post_id', '=', 'saved_posts.id')
      ->where('users.id', '=',Auth::user()->id)
      ->select('saved_posts.*','posts.*','residential-details.*')
    //   ->orderBy('created_at', 'desc')
      ->paginate(5);
    return view('posts',compact('posts'));
}

 // تابع لاظهار المستخدمين
public function delete_user($user_id)
{
   $user= User::find($user_id);
}
     
// تابع لحفظ التعليق
    public function  save_comment(Request $request)
    {
        Comment::create([
               'post_id' => $request -> post_id ,
               'user_id' => Auth::id(),
               'comment' => $request -> post_content,
        ]);

          $data =[
               'user_id' => Auth::id(),
               'user_name'  => Auth::user() -> name,
               'comment' => $request -> post_content,
               'post_id' =>$request -> post_id ,
          ];

           ///   save  notify in database table ////

        event(new NewNotification($data));
        return redirect() -> back() -> with(['success'=> 'تم اضافه تعليقك بنجاح ']);
    }
    // تابع لاظهار تفاصيل الملكية
    public function property_details(Request $request)
    {
        $property_details=Post::find($request->id);
        return view('property_details',compact('property_details'));
    }
    
    public function index()
    {
        $featured_posts = Post::where('is_featured', '=', '1')->orderBy('created_at')->take(6)->get();
        $featured_agents = EmployeeInfo::where('is_featured', '=', '1')->orderBy('created_at')->take(5)->get();
        return view('index', compact('featured_posts', 'featured_agents'));
    }
    public function admin_home()
    {
        return view('dashboard.home');
    }
    // تابع اظهار صفحة الوكلاء
    public function agents_show()
    {
      $agents=EmployeeInfo::paginate(6);
      return view('agents',compact('agents'));
    }
    public function agent_details($agent_id)
    {  
        $agent_details=DB::table('employee_infos')
        ->leftjoin('users','employee_infos.user_id','=','users.id')
        ->where('employee_infos.id', '=', $agent_id)
        ->select('users.email','employee_infos.*')
        ->get();
        $agent_properties= DB::table('employee_infos')
        ->join('users','employee_infos.user_id','=','users.id')
        ->join('posts','posts.user_id','=', 'users.id')
        ->where('employee_infos.id', '=', $agent_id)
        ->select('posts.*')
        ->paginate(8);
        // dd($agent_properties);
        return view('agent_details',compact('agent_details','agent_properties'));
    }
    /*تابع البحث الصفحة الرئيسية*/
    public function search_post(Request $request)
    {

        $data = DB::table('posts')
            ->select('posts.id', 'posts.realestate_department', 'posts.realestate_type', 'posts.space', 'posts.city', 'posts.region', 'posts.town', 'residential-details.rooms_number', 'posts.direction', 'posts.price')
            ->join('residential-details', 'residential-details.post_id', '=', 'posts.id')
            ->where('posts.realestate_department', 'like', '%' . $request->keyword . '%')
            ->orWhere('posts.realestate_type', 'like', '%' . $request->keyword . '%')
            ->orWhere('posts.space', 'like', '%' . $request->keyword . '%')
            ->orWhere('posts.price', 'like', '%' . $request->keyword . '%')
            ->orWhere('posts.city', 'like', '%' . $request->keyword . '%')
            ->orWhere('posts.region', 'like', '%' . $request->keyword . '%')
            ->orWhere('posts.town', 'like', '%' . $request->keyword . '%')
            ->Where('posts.direction', 'like', '%' . $request->keyword . '%')
            ->Where('posts.city', 'like', '%' . $request->location . '%')
            ->paginate(10);

        dd($data);
        return view('index');
    }
 
/*تابع البحث المتقدم*/

    public function advanced_search_post(Request $request)
    {
        dd($request->type);
        $q = Post::query()->join('residential-details', 'residential-details.post_id', '=', 'posts.id');
        $term = Request::all();
        if (!empty($term['keyword']))
         {
            // simple where here or another scope, whatever you like
            $q->where('posts.city', 'like',$term['keyword'])
                ->orWhere('posts.realestate_type', 'like', '%' . $request->keyword . '%')
                ->orWhere('posts.space', 'like', '%' . $request->keyword . '%')
                ->orWhere('posts.price', 'like', '%' . $request->keyword . '%')
                ->orWhere('posts.city', 'like', '%' . $request->keyword . '%')
                ->orWhere('posts.region', 'like', '%' . $request->keyword . '%')
                ->orWhere('posts.town', 'like', '%' . $request->keyword . '%');
        }
        if (!empty($term['location'])) {
            // simple where here or another scope, whatever you like
            $q->where('posts.city', 'like', $term['location']);
        }

        if (!empty($term['realestate_type'])) {
            $q->where('posts.realestate_type', 'like', $term['realestate_type']);
        }

        if (!empty($term['rooms_number'])) {
            $q->where('residential-details.rooms_number',$term['rooms_number']);
        }

        if (!empty($term['bathrooms_number'])) {
            $q->where('residential-details.bathrooms_number',$term['bathrooms_number']);
        }
        if (!empty($term['floor_number'])) {
            $q->where('residential-details.floor_number',$term['floor_number']);
        }
        if (!empty($term['price'])) {
            $q->where('posts.price',$term['price']);
        }
        if (!empty($term['realestate_department'])) {
            $q->where('posts.realestate_department',$term['realestate_department']);
        }
        if (!empty($term['square'])) {
            $q->where('posts.square',$term['square']);
        }

        $data = $q->get()->paginate(5);
        dd($data);
    }
    // --- 
   

  
   
}
