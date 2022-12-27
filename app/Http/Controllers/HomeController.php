<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Savedpost;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Models\USer;
use App\Models\Like;
use App\Models\Image;
use App\Models\About;
use App\Models\Message;
use App\Models\Notification;
use Illuminate\Support\Facades\Hash;
use App\Notifications\CommentNotification;
use App\Notifications\LikeNotification;
use App\Notifications\DislikeNotification;
use App\Notifications\messageNotification;
use App\Notifications\PostNotification;
use Psy\Readline\Hoa\Console;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Carbon\Carbon;


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
    public function dist($lat1,$lan1,$lat2,$lan2)
    {
         $d = sqrt((($lat1 - $lat2) * ($lat1 - $lat2)) + (($lan1 - $lan2) * ($lan1 - $lan2)));
        return $d;
    }
    public function Kmeans()
    {   $centers = array (
        array(35.15525267163359,36.746960571723136),
        array(34.91246977145457,35.887741339817396),
        array(35.54889362380621,35.79684157805577),
        array(34.75080705093059,36.675539332542556),
        array(35.28077234914719,40.1175017553534),
        array(32.72269785800893,36.57101199993651),
        array(32.63947422172085,36.08486699370611),
        array(35.935512180601684,36.641919122778454),
        array(33.48711948271297,36.3766185006835),
        array(33.126878301531875,35.82458995457861),
        array(35.96221251335096,38.999831043022624),
        array(36.5917733299423,40.74255456106742),
        array(33.51861940850509,36.270532761438965),
        array(36.189039951279966,37.14518813497226),
      );
      for ( $iterration = 0; $iterration < 1000; $iterration++) {
              $sum_lat = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
              $sum_lng = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
             $number_of_nodes = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
              foreach(Post::all() as $post ) {
                   $min_distance = 10000;
                  $best_center = -1;
                  for ($center = 0; $center < count($centers); $center++) {
                      // console.log(centers[center].lat);
                      // console.log(centers[center].lng);
                      // console.log(number_of_nodes[center]);
                      // console.log(rows[row].lat);
                      // console.log(rows[row].lng);
                      // console.log(centers[center].lat);
                      // console.log(centers[center].lng);
                      // console.log(rows[row].cluster_number);
                      if ($min_distance > HomeController::dist($post->lat,$post->lng, $centers[$center][0], $centers[$center][1])) {
                          // console.log(min_distance > dist(rows[row].lat, rows[row].lng, centers[center].lat, centers[center].lng));
                          $min_distance = HomeController::dist($post->lat,$post->lng, $centers[$center][0], $centers[$center][1]);
                          $best_center = $center;
                          // console.log(best_center);
                      }
                      // console.log(rows[row].lat + ' ' + rows[row].lng + ' ' + rows[row].cluster_number)
                  }
                  $post->cluster= $best_center;
                  $post->save();
                  $sum_lat[$best_center] += $post->lat;
                  $sum_lng[$best_center] += $post->lng;
                  $number_of_nodes[$best_center]++;
              }
               $flag = true;
              for ($center = 0; $center < count($centers); $center++) {
                if($number_of_nodes[$center] !=0){
                  if ($sum_lat[$center] / $number_of_nodes[$center]) {
                      $flag = false;
                      $centers[$center][0] = $sum_lat[$center] / $number_of_nodes[$center];
                  }
                  if ($sum_lng[$center] / $number_of_nodes[$center]) {
                      $flag = false;
                      $centers[$center][1] = $sum_lng[$center] / $number_of_nodes[$center];
                  }}
              }
              if ($flag) {
                  break;
              }
          }
    }

    public function show_profile_another($user)
    {
        $user = User::find($user);
        return view('Profile_anotheruser', compact('user'));
    }
    public function show_index_agents()
    {
        $agents = Agent::where('work_state', 1)->get();
        return view('agents', compact('agents'));
    }

    public function remove_featured_post(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->is_featured = 0;
        $post->save();
        return response()->json(['status' => 200]);
    }

    public function unfollow(User $user)
    {
        $follower = User::find(Auth::user()->id);
        if ($follower->isFollowing($user->id)) {
            $follower->unfollow($user->id);
            return back();
            // return back()->withSuccess("You are no longer friends with {$user->name}");
        }
        return back();
    }
    public function  make_featured_post(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->is_featured = 1;
        $post->save();
        return response()->json(['status' => 200]);
    }
    public function contact()
    {
        $about = About::get();
        return view('contact', compact('about'));
    }
    public function names_show()
    {
        return view('on-website');
    }
    //
    public function profile_update()
    {
        return view('dashboard.profile_update');
    }
    public function profile_update_save(Request $request)
    {

        $user = User::find(Auth::user()->id);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->name = $request->user_name;
        if ($request->hasfile('user_img')) {


            $filename = time() . '.' . $request->user_img->extension();
            $request->user_img->move(public_path('\Images\user'), $filename);
            $user->image_url = $filename;
        }
        $user->save();
        return redirect('/profile');
    }
    public function save_message(Request $request)
    {
        $message = new Message;
        $message->user_id = Auth()->user()->id;
        $message->content = $request->content;
        $message->save();
        $user = User::find(120);
        $user->notify(new messageNotification($message));
        return response()->json(['status' => 200, 'message' => 'تم إرسال رسالتك بنجاح']);
    }
    // إضافة موظف
    public function save_agent(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $new_agent = new Agent;
        $new_agent->first_name = $request->first_name;
        $new_agent->last_name = $request->last_name;
        $new_agent->gender = $request->gender;
        $new_agent->birthday = $request->birthday;
        $new_agent->address = $request->address;

        $new_user = new User;
        $new_user->name = $request->user_name;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request['password']);
        $new_user->phone = $request->phone;
        $img = $request->employee_img;
        if ($request->hasfile('employee_img')) {
            $filename = time() . '.' . $img->extension();
            $img->move(public_path('\Images\user'), $filename);
            $new_user->image_url = $filename;
        }
        $new_user->save();

        $new_agent->user_id = $new_user->id;

        $new_agent->save();

        return redirect('/show_agents');
    }
    public function agent_update_save(Request $request)
    {
        $new_agent = Agent::find($request->id);
        $new_agent->first_name = $request->first_name;
        $new_agent->last_name = $request->last_name;
        $new_agent->gender = $request->gender;
        $new_agent->birthday = $request->birthday;
        $new_agent->address = $request->address;
        $new_agent->save();
        $agents = Agent::paginate(10);
        return view('dashboard.agents', compact('agents'));
    }
    public function agent_update($agent_id)
    {
        $agent = Agent::find($agent_id);
        return view('dashboard.update_agent', compact('agent'));
    }
    public function show_profile()
    {
        return view('dashboard.profile');
    }
    public function city_post($city_name)
    {
        $sale_posts = Post::where('city', 'like',$city_name . '%')->where('realestate_status', 1)
            ->orderBy('created_at', 'Desc')
            ->where('realestate_department', 1)
            ->get();
        $rent_posts = Post::where('city', 'like',$city_name . '%')->where('realestate_status', 1)
            ->orderBy('created_at', 'Desc')
            ->where('realestate_department', 2)
            ->get();
        $mort_posts = Post::where('city', 'like',$city_name . '%')->where('realestate_status', 1)
            ->orderBy('created_at', 'Desc')
            ->where('realestate_department', 4)
            ->get();
        $else_posts = Post::where('city', 'like',$city_name . '%')
            ->orderBy('created_at', 'Desc')
            ->where('realestate_status', 1)
            ->whereIn('realestate_department', ['3', '5', '6', '7'])
            ->get();
        return view('posts', compact('sale_posts', 'rent_posts', 'mort_posts', 'else_posts'));
    }
    public function new_sale_posts()
    {
        $posts = Post::where('realestate_department', '1')
            ->where('realestate_status', 1)
            ->orwhere('realestate_department', '3')
            ->orwhere('realestate_department', '5')
            ->orwhere('realestate_department', '7')
            ->orderBy('created_at', 'Desc')
            ->take(20)->paginate(12);
        return view('link_posts', compact('posts'));
    }
    public function new_rent_posts()
    {
        $posts = Post::where('realestate_department', '2')
            ->where('realestate_status', 1)
            ->orwhere('realestate_department', '3')
            ->orwhere('realestate_department', '6')
            ->orderBy('created_at', 'Desc')
            ->orwhere('realestate_department', '7')
            ->take(20)->paginate(12);
        return view('link_posts', compact('posts'));
    }
    public function new_mort_posts()
    {
        $posts = Post::where('realestate_department', '4')
            ->where('realestate_status', 1)
            ->orwhere('realestate_department', '5')
            ->orderBy('created_at', 'Desc')
            ->orwhere('realestate_department', '6')
            ->orwhere('realestate_department', '7')
            ->take(20)->paginate(12);
        return view('link_posts', compact('posts'));
    }
    public function new_posts()
    {
        $posts = Post::where('realestate_status', 1)
            ->orderBy('created_at', 'Desc')->take(20)->paginate(12);
        return view('link_posts', compact('posts'));
    }
    public function sale_posts()
    {
        $posts = Post::where('realestate_department', '1')
            ->where('realestate_status', 1)
            ->orderBy('created_at', 'Desc')
            ->orwhere('realestate_department', '3')
            ->orwhere('realestate_department', '5')
            ->orwhere('realestate_department', '7')
            ->paginate(12);
        return view('link_posts', compact('posts'));
    }
    public function rent_posts()
    {
        $posts = Post::where('realestate_department', '2')
            ->where('realestate_status', 1)
            ->orderBy('created_at', 'Desc')
            ->orwhere('realestate_department', '3')
            ->orwhere('realestate_department', '6')
            ->orwhere('realestate_department', '7')
            ->paginate(12);
        return view('link_posts', compact('posts'));
    }
    public function mort_posts()
    {
        $posts = Post::where('realestate_department', '4')
            ->where('realestate_status', 1)
            ->orwhere('realestate_department', '5')
            ->orwhere('realestate_department', '6')
            ->orwhere('realestate_department', '7')
            ->paginate(12);
        return view('link_posts', compact('posts'));
    }

    public function show_posts()
    {
        $sale_posts = Post::where('realestate_department', '1')
            ->orderBy('created_at', 'Desc')
            ->where('realestate_status', 1)
            ->get();
        $rent_posts = Post::where('realestate_department', '2')
            ->orderBy('created_at', 'Desc')
            ->where('realestate_status', 1)
            ->get();
        $mort_posts = Post::where('realestate_department', '4')
            ->orderBy('created_at', 'Desc')
            ->where('realestate_status', 1)
            ->get();
        $else_posts = Post::where('realestate_department', '3')
            ->orderBy('created_at', 'Desc')
            ->where('realestate_status', 1)
            ->orwhere('realestate_department', '5')
            ->orwhere('realestate_department', '6')
            ->orwhere('realestate_department', '7')
            ->get();
        return view('posts', compact('sale_posts', 'rent_posts', 'mort_posts', 'else_posts'));
    }
    //
    public function show_users()
    {
        $users = User::paginate(20);
        return view('dashboard.users', compact('users'));
    }
    // اظهار واجهة اضافة وكيل
    public function agent_add()
    {
        return view('dashboard.add_agent');
    }
    // اظهار واجهة اضافة معلومات حول الشركة
    public function add_information()
    {
        $about = About::find(1);

        return view('dashboard.add_information', compact('about'));
    }
    public function save_information(Request $request)
    {
        $about = About::find(1);
        $about->email = $request->email;
        $about->phone = $request->phone;
        $about->address = $request->address;
        if ($request->about) {
            $about->about = $request->about;
        }
        $about->save();
        return response()->json(['status' => 200, 'message' => 'تم تحديث المعلومات بنجاح']);
    }
    // اظهار تفاصيل  المنشورة
    public function show_post($post_id)
    {
        $post = Post::find($post_id);
        $kmeans_posts = Post::all();
        return view('show_post', compact('post', 'kmeans_posts'));
    }

    // تابع لتعديل المنشور
    public function post_update_show($post_id)
    {
        $post = Post::find($post_id);
        return view('update_post', compact('post'));
    }
    // تابع تعديل المنشور
    public function post_update_save(Request $request)
    {
        $post = Post::find($request->id);
        $post->city = $request->location1;
        $post->town = $request->location2;
        if ($request->location3 != "null") {
            $post->region = $request->location3;
        }
        if ($request->location4 != "null") {
            $post->side = $request->location4;
        }
        if ($request->phone != "null") {
            $post->user->phone = $request->phone;
        }
        $post->realestate_department = $request->realestate_department;
        $post->realestate_type = $request->realestate_type;
        $post->space = $request->space;
        $post->direction = $request->direction;
        if ($request->location4 != "null") {
            $post->video_url = $request->video_url;
        }
        if ($request->finishing_type != "null") {
            $post->finishing_type = $request->finishing_type;
        }

        if ($request->sale_price != "noDetails") {
            $post->sale_price = $request->sale_price;
        }
        if ($request->rent_price != "noDetails") {
            $post->rent_price = $request->rent_price;
        }

        if ($request->mort_price != "noDetails") {

            $post->mort_price = $request->mort_price;
        }
        $post->view = $request->view;
        if ($request->description != null) {
            $post->description = $request->description;
        }
        if ($request->contract_type != null) {
            $post->contract_type = $request->contract_type;
        }
        if ($request->bathrooms_num != "noDetails") {
            $post->bathrooms_num = $request->bathrooms_num;
        }
        if ($request->rooms_num != "noDetails") {
            $post->rooms_num = $request->rooms_num;
        }
        if ($request->floor_number != "noDetails") {
            $post->floor_number = $request->floor_number;
        }
        $post->construction_year=$request->construction_year;
        $post->lat = $request->lat;
        $post->lng = $request->lng;
        $post->features = $request->features;
        $post->save();
        // if ($request->hasfile('Image')) {
        //     foreach ($request->file('Image') as $image) {
        //         $name = $image->getClientOriginalName();
        //         $image->move(public_path() . '\Images\properties', $name);
        //         $new_image = new Image();
        //         $new_image->post_id = $post->id;
        //         $new_image->image_url = $name;
        //         $new_image->save();
        //     }
        // }

        return redirect('/');
    }
    // تابع لحفظ المنشور
    public function save_post(Request $request)
    {
        $post = new Post;
        $post->city = $request->location1;
        $post->user_id = Auth::user()->id;
        $post->town = $request->location2;
        if ($request->location3 != "null") {
            $post->region = $request->location3;
        }
        if ($request->location4 != "null") {
            $post->side = $request->location4;
        }

        $user = User::find(auth()->user()->id);
        if ($user->phone == "null") {
            $user->phone = $request->phone;
            $user->save();
        }
        $post->realestate_department = $request->realestate_depart;
        $post->realestate_type = $request->realestate_type;
        $post->space = $request->space;
        $post->direction = $request->direction;
        if ($request->location4 != "null") {
            $post->video_url = $request->video_url;
        }
        if ($request->finishing_type != "null") {
            $post->finishing_type = $request->finishing_type;
        }

        if ($request->sale_price != "noDetails") {
            $post->sale_price = $request->sale_price;
        }
        if ($request->rent_price != "noDetails") {
            $post->rent_price = $request->rent_price;
        }

        if ($request->mort_price != "noDetails") {

            $post->mort_price = $request->mort_price;
        }
        $post->view = $request->view;
        if ($request->description != null) {
            $post->description = $request->description;
        }
        if ($request->contract_type != null) {
            $post->contract_type = $request->contract_type;
        }
        if ($request->bathrooms_num != "noDetails") {
            $post->bathrooms_num = $request->bathrooms_num;
        }
        if ($request->rooms_num != "noDetails") {
            $post->rooms_num = $request->rooms_num;
        }
        if ($request->floor_number != "noDetails") {
            $post->floor_number = $request->floor_number;
        }
        $post->construction_year=$request->construction_year;
        $post->lat = $request->lat;
        $post->lng = $request->lng;
        $post->features = $request->features;
        $post->save();
        if ($request->hasfile('Image')) {

            foreach ($request->file('Image') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '\Images\properties', $name);
                $new_image = new Image();
                $new_image->post_id = $post->id;
                $new_image->image_url = $name;
                $new_image->save();
            }
        }
        $followers = $user->followers;

        foreach ($followers as $_follower) {
            $_follower->notify(new PostNotification($post));
            $notify_id = $_follower->notifications()->latest()->first()->id;
            $notify = Notification::find($notify_id);
            $notify->post_id = $post->id;
            $notify->save();
        }
        HomeController::Kmeans();
        return redirect('/');
    }
    //  تابع لحفظ التعليق
    public function  save_comment(Request $request)
    {
        $comment = new Comment;
        $comment->post_id = $request->post_id;
        $comment->user_id =  Auth::user()->id;
        $comment->comment = $request->comment;
        $comment->save();
        $comment_author = USer::find(Auth::user()->id);
        $user_id = Post::find($request->post_id)->user_id;
        //   $data =[
        //        'user_id' => Auth::id(),
        //        'user_name'  => Auth::user() -> name,
        //        'comment' => $request -> post_content,
        //        'post_id' =>$request -> post_id ,
        //        'rec_user' =>$user_id ,
        //        'comment_id' =>$comment->id ,

        //   ];
        ///   save  notify in database table ////
        //  $notify=new Notificationpost;
        //  $notify->user_id=Auth::id();
        //  $notify->post_id=$request ->post_id;
        //  $notify->comment_id=$comment->id;
        //  $notify->save();
        $user = User::find($user_id);
        if ($user_id != Auth()->user()->id) {

            $user->notify(new CommentNotification($comment));
            $notify_id = $user->notifications()->latest()->first()->id;
            $notify = Notification::find($notify_id);
            $notify->post_id = $comment->post_id;
            $notify->comment_id = $comment->id;
            $notify->save();
        }
        // $notify->nour =1;
        // $notify->save();
        // event(new NewNotification($data));
        // NewNotification::dispatch($data);
        // Notification::send($user,new NewNotification($data));
        return response()->json([
            'status' => 200,
            'message' => 'تم حذف التعليق بنجاح',
            'comment' => $comment,
            'user' => $comment_author
        ]);
    }
    public function add_saved_post(Request $request)
    {
        $saved_post = new Savedpost;
        $saved_post->post_id = $request->post_id;
        $saved_post->user_id = Auth::user()->id;;
        $saved_post->save();
        return response()->json([
            'status' => 200,
            'message' => 'تم حفظ المنشور بنجاح',
        ]);
    }


    // حذف تعليق
    public function delete_comment(Request $request)
    {
        if (Auth::check()) {
            Comment::find($request->comment_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'تم حذف التعليق بنجاح'
            ]);
        } else {

            return response()->json([
                'status' => 401,
                'message' => 'عليك تسجيل الدخول أولا'
            ]);
        }
    }
    // حفظ الاعجاب
    public function save_like(Request $request)
    {
        $like_s = $request->like_s;
        $post_id = $request->post_id;
        $user = User::find(Post::find($post_id)->user_id);
        $change_like = 0;
        $like = DB::table('likes')
            ->where('post_id', $post_id)
            ->where('user_id', Auth::user()->id)
            ->first();
        if (!$like) {
            $new_like = new Like;
            $new_like->post_id = $post_id;
            $new_like->user_id = Auth::user()->id;
            $new_like->like = 1;
            $new_like->save();
            if ($user->id != Auth()->user()->id) {
                $user->notify(new LikeNotification($new_like));
                $notify_id = $user->notifications()->latest()->first()->id;
                $notify = Notification::find($notify_id);
                $notify->post_id = $new_like->post_id;
                $notify->like_id = $new_like->id;
                $notify->save();
            }
            $is_like = 1;
        } elseif ($like->like == 1) {
            DB::table('likes')
                ->where('post_id', $post_id)
                ->where('user_id', Auth::user()->id)
                ->delete();
            $is_like = 0;
        } elseif ($like->like == 0) {
            DB::table('likes')
                ->where('post_id', $post_id)
                ->where('user_id', Auth::user()->id)
                ->update(['like' => 1]);
            $is_like = 1;
            $change_like = 1;
        }

        $response = array('is_like' => $is_like, 'change_like' => $change_like);

        return response()->json($response);
    }
    // حفظ عدم الاعجاب
    public function save_dislike(Request $request)
    {
        $like_s = $request->like_s;
        $post_id = $request->post_id;
        $user = User::find(Post::find($post_id)->user_id);
        $change_dislike = 0;
        $dislike = DB::table('likes')
            ->where('post_id', $post_id)
            ->where('user_id', Auth::user()->id)
            ->first();
        if (!$dislike) {
            $new_like = new Like;
            $new_like->post_id = $post_id;
            $new_like->user_id = Auth::user()->id;
            $new_like->like = 0;
            $new_like->save();
            $is_dislike = 1;
        } elseif ($dislike->like == 0) {
            DB::table('likes')
                ->where('post_id', $post_id)
                ->where('user_id', Auth::user()->id)
                ->delete();
            $is_dislike = 0;
        } elseif ($dislike->like == 1) {
            DB::table('likes')
                ->where('post_id', $post_id)
                ->where('user_id', Auth::user()->id)
                ->update(['like' => 0]);
            $is_dislike = 1;
            $change_dislike = 1;
        }
        $response = array('is_dislike' => $is_dislike, 'change_dislike' => $change_dislike);

        return response()->json($response);
    }
    public function featured_post()
    {
        $featured_posts = Post::where('is_featured', '=', '1')->where('realestate_status', 1)->orderBy('posts.created_at', 'desc')->paginate(4);
        return view('featured_posts', compact('featured_posts'));
    }

    // لاظهار المناشير المميزة في الداشبورد
    public function show_featured_post()
    {

        $featured_posts = Post::where('is_featured', '=', '1')->where('realestate_status', 1)->orderBy('posts.created_at')->paginate(10);
        return view('dashboard.featured_posts', compact('featured_posts'));
    }   // لاظهار المناشير للمدير
    public function show_control_posts()
    {
        $posts = Post::paginate(10);
        return view('dashboard.show_control_posts', compact('posts'));
    }
    // لاظهار الوكلاء للمدير
    public function show_agents()
    {
        $agents = Agent::paginate(10);
        return view('dashboard.agents', compact('agents'));
    }
    // لاظهار مناشير المستخدم

    // حذف منشور
    public function delete_post(Request $request)
    {
        if (Auth::check()) {
            Post::find($request->post_id)->delete();

            return response()->json([
                'status' => 200,
                'message' => 'تم حذف المنشور بنجاح'
            ]);
        } else {

            return response()->json([
                'status' => 401,
                'message' => 'عليك تسجيل الدخول أولا'
            ]);
        }
    }
    // تابع حذف المنشور من محفوظات المستخدم
    public function remove_post(Request $request)
    {
        DB::table('savedposts')->where('post_id', $request->post_id)
            ->where('user_id', auth()->user()->id)->delete();
        return response()->json([
            'status' => 200,
            'message' => 'تم إزالة المنشور بنجاح'
        ]);
    }



    // تابع لاظهار المستخدمين
    public function delete_user($user_id)
    {
        $user = User::find($user_id);
    }


    // تابع لاظهار تفاصيل الملكية
    // public function property_details(Request $request)
    // {
    //     $property_details = Post::find($request->id);
    //     return view('property_details', compact('property_details'));
    // }

    public function index()
    {
        $about = About::all();
        $featured_posts = Post::where('is_featured', '=', '1')->where('realestate_status', 1)->orderBy('created_at', 'Desc')->take(8)->get();
        $featured_agents = Agent::where('work_state', 1)->orderBy('created_at')->get();
        return view('index', compact('featured_posts', 'featured_agents', 'about'));
    }

    public function update_statistic(Request $request)
    {
        $users = User::select('id', 'created_at')
            ->where('created_at', 'LIKE', '%' . $request->year . '%')->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        $usermcount = [];
        $userArr = [];

        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $userArr[$i] = $usermcount[$i];
            } else {
                $userArr[$i] = 0;
            }
        }

        return response()->json([
            'status' => 200, 'userArr' => $userArr

        ]);
    }
    public function update_statistic_2(Request $request)
    {
        $posts = Post::select('id', 'created_at')
            ->where('created_at', 'LIKE', '%' . $request->year . '%')->where('realestate_status', 0)->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        $postmcount = [];
        $postArr = [];

        foreach ($posts as $key => $value) {
            $postmcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($postmcount[$i])) {
                $postArr[$i] = $postmcount[$i];
            } else {
                $postArr[$i] = 0;
            }
        }
        return response()->json([
            'status' => 200, 'postArr' => $postArr
        ]);
    }

    public function admin_home()
    {
        $users = User::all()->count();
        //العدد الكلي للمناشير
        $posts = Post::all()->count();
        //العدد الكلي للوكلاء
        $agents = Agent::where('work_state', 1)->count();
        //العدد الكلي للوكلاء
        $sale_posts = Post::where('realestate_status', 0)->count();
        // أكثر شخص ناشر بوست
        $most_post = User::withCount('posts')
            ->orderBy('posts_count', 'desc')
            ->first();
        $most_post_publish = $most_post->name;
        // أكثر مستخدم عمل تعليقات
        $most_comment = User::withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->first();
        $likes_count_1 = DB::table('likes')->where('user_id', $most_comment->id)->count();
        $posts_count_1 = DB::table('posts')->where('user_id', $most_comment->id)->count();

        $user_1_count = $most_comment->comments_count + $likes_count_1;
        // أكثر مستخدم عمل اعجابات
        $most_likes = User::withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->first();
        $comments_count_2 = DB::table('comments')->where('user_id', $most_likes->id)->count();
        $posts_count_2 = DB::table('posts')->where('user_id', $most_likes->id)->count();

        $user_2_count = $most_likes->likes_count + $comments_count_2;
        if ($user_1_count > $user_2_count) {
            $active_user_id = $most_comment->id;
            $active_user_image_url = $most_comment->image_url;
            $active_user = $most_comment->name;
            $active_user_likes = $likes_count_1;
            $active_user_comments = $most_comment->comments_count;
            $active_user_posts = $posts_count_1;
        } else {
            $active_user_id = $most_likes->id;
            $active_user_image_url = $most_likes->image_url;
            $active_user = $most_likes->name;
            $active_user_likes = $most_likes->likes_count;
            $active_user_comments = $comments_count_2;
            $active_user_posts = $posts_count_2;
        }

        // اكثر المناشير تفاعلا
        // أكثر منشور حائزعلى تعليقات
        $most_comment_Post = Post::withCount('comments')
            ->orderBy('comments_count', 'desc')
            ->first();

        $likes_count_post_1 = DB::table('likes')->where('post_id', $most_comment_Post->id)->where('like', 1)->count();

        $post_1_count = $most_comment_Post->comments_count + $likes_count_post_1;
        // أكثر منشور حائزعلى اعجابات
        $most_likes_post = Post::withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->first();
        $comments_count_post_2 = DB::table('comments')->where('post_id', $most_likes_post->id)->count();
        $post_2_count = $most_likes_post->likes_count + $comments_count_post_2;
        if ($post_1_count > $post_2_count) {

            $active_post = $most_comment_Post;
            $active_post_likes = $likes_count_post_1;
            $active_post_comments = $most_comment_Post->comments_count;
        } else {

            $active_post = $most_likes_post;
            $active_post_likes = $most_likes_post->likes_count;
            $active_post_comments = $comments_count_post_2;
        }

        $statistics = array(
            'users' => $users,
            'posts' => $posts,
            'agents' => $agents,
            'active_user' => $active_user,
            'active_user_id' => $active_user_id,
            'active_user_image_url' => $active_user_image_url,
            'active_user_comments' => $active_user_comments,
            'active_user_likes' => $active_user_likes,
            'active_user_posts' => $active_user_posts,
            'most_comment_id' => $most_comment->id,
            'most_comment_image_url' => $most_comment->image_url,
            'most_comment_user' => $most_comment->name,
            'most_comment_count' => $most_comment->comments_count,
            'most_comment_likes_count' => $likes_count_1,
            'most_comment_posts_count' => $posts_count_1,
            'most_like_user' => $most_likes->name,
            'most_like_id' => $most_likes->id,
            'most_like_image_url' => $most_likes->image_url,
            'most_like_count' => $most_likes->likes_count,
            'most_like_comments_count' => $comments_count_2,
            'most_like_posts_count' => $posts_count_2,
            'active_post' => $active_post,
            'active_post_likes' => $active_post_likes,
            'active_post_comments' => $active_post_comments,
            'most_comment_Post' => $most_comment_Post,
            'likes_count_post_1' => $likes_count_post_1,
            'most_likes_post' => $most_likes_post,
            'comments_count_post_2' => $comments_count_post_2,
            'most_post_publish' => $most_post_publish,
            'sale_posts' => $sale_posts,
        );
        $agents = Agent::where('work_state', 1)->get();
        $users = User::select('id', 'created_at')
            ->where('created_at', 'LIKE', '%' . '2022' . '%')->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        $usermcount = [];
        $userArr = [];

        foreach ($users as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($usermcount[$i])) {
                $userArr[$i] = $usermcount[$i];
            } else {
                $userArr[$i] = 0;
            }
        }


        $posts = Post::select('id', 'created_at')
            ->where('created_at', 'LIKE', '%' . '2022' . '%')
            ->where('realestate_status', 0)->get()
            ->groupBy(function ($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });

        $postmcount = [];
        $postArr = [];

        foreach ($posts as $key => $value) {
            $postmcount[(int)$key] = count($value);
        }

        for ($i = 1; $i <= 12; $i++) {
            if (!empty($postmcount[$i])) {
                $postArr[$i] = $postmcount[$i];
            } else {
                $postArr[$i] = 0;
            }
        }

        return view('dashboard.home', compact('statistics', 'agents', 'userArr', 'postArr'));
    }
    // تابع اظهار صفحة الوكلاء
    public function agents_show()
    {
        $agents = Agent::where('work_state', 1)->get();
        return view('agents', compact('agents'));
    }
    // public function agent_details($agent_id)
    // {
    //     $agent_details = DB::table('agents')
    //         ->leftjoin('users', 'agents.user_id', '=', 'users.id')
    //         ->where('agents.id', '=', $agent_id)
    //         ->select('users.email', 'agents.*')
    //         ->get();
    //     $agent_properties = DB::table('agents')
    //         ->join('users', 'agents.user_id', '=', 'users.id')
    //         ->join('posts', 'posts.user_id', '=', 'users.id')
    //         ->where('agents.id', '=', $agent_id)
    //         ->select('posts.*')
    //         ->paginate(8);
    //     // dd($agent_properties);
    //     return view('agent_details', compact('agent_details', 'agent_properties'));
    // }
    /*تابع البحث الصفحة الرئيسية*/
    public function open_search(Request $request)
    {
        $keyword = $request->keyword;
        $posts = Post::where('posts.realestate_type', 'LIKE', '%' .  $keyword  . '%')->where('realestate_status', 1)
            ->orWhere('posts.description', 'LIKE', '%' .  $keyword  . '%')
            ->orWhere('posts.view', 'LIKE', '%' .  $keyword  . '%')
            ->orWhere('posts.side', 'LIKE', '%' .  $keyword  . '%')
            ->orWhere('posts.city', 'LIKE', '%' .  $keyword  . '%')
            ->orWhere('posts.region', 'LIKE', '%' .  $keyword  . '%')
            ->orWhere('posts.town', 'LIKE', '%' .  $keyword  . '%')
            ->orWhere('posts.contract_type', 'LIKE', '%' .  $keyword  . '%')
            ->orWhere('posts.finishing_type', 'LIKE', '%' .  $keyword  . '%')
            ->get();
        // $posts->appends(['keyword' => $request->keyword]);

        // dd($posts);
        return view('search', compact('posts'));
    }

    /*تابع البحث المتقدم*/

    public function search(Request $request)
    {
        $q = Post::query();
        $term = $request;
        if (!empty($term['location1'])) {
            // dd('location1');

            // simple where here or another scope, whatever you like
            $q->where('city', $term['location1']);
        }

        if (!empty($term['location2'])) {
            // dd('location2');
            $q->where('town', $term['location2']);
        }
        if (!empty($term['location3'])) {
            // dd('location3');

            $q->where('region', $term['location3']);
        }
        if (!empty($term['location4'])) {
            // dd('location4');

            $q->where('side', $term['location4']);
        }

        if (!empty($term['realestate_type'])) {
            $q->where('realestate_type', $term['realestate_type']);
        }

        if (!empty($term['realestate_department'])) {

            if ($term['realestate_department'] == 1) {
                $q->whereIn('realestate_department', [1, 3, 5, 7]);
            } elseif ($term['realestate_department'] == 2) {
                $q->whereIn('realestate_department', [2, 3, 6, 7]);
            } elseif ($term['realestate_department'] == 4) {
                $q->whereIn('realestate_department', [4, 5, 6, 7]);
            }
        }
        if (!empty($term['min_price']) && !empty($term['max_price'])) {

            if (!empty($term['realestate_department'])) {
                if ($term['realestate_department'] == 1) {
                    $q->whereBetween('sale_price', [$term['min_price'], $term['max_price']]);
                } elseif ($term['realestate_department'] == 2) {
                    $q->whereBetween('rent_price', [$term['min_price'], $term['max_price']]);
                } elseif ($term['realestate_department'] == 4) {
                    $q->whereBetween('mort_price', [$term['min_price'], $term['max_price']]);
                }
            }
            if (empty($term['realestate_department'])) {
                $q->whereBetween('sale_price', [$term['min_price'], $term['max_price']])
                    ->orWhereBetween('rent_price', [$term['min_price'], $term['max_price']])
                    ->orWhereBetween('mort_price', [$term['min_price'], $term['max_price']]);
            }
        }
        if (!empty($term['min_square']) && !empty($term['max_square'])) {
            $q->whereBetween('space', [$term['min_square'], $term['max_square']]);
        }
        $posts = $q->get('*');
        return view('/search', compact('posts'));
    }

    // --- الاحصائيات قيد التجريب
    // public function statistics()
    // {   //العدد الكلي للمستخدمين
    //     $users = User::all()->count();
    //     //العدد الكلي للمناشير
    //     $posts = Post::all()->count();
    //     //العدد الكلي للوكلاء
    //     $agents = Agent::all()->where('work_state', 1)->count();
    //     // أكثر شخص ناشر بوست
    //     $most_post = User::withCount('posts')
    //         ->orderBy('posts_count', 'desc')
    //         ->first();
    //     $most_post_publish = $most_post->name;
    //     // أكثر مستخدم عمل تعليقات
    //     $most_comment = User::withCount('comments')
    //         ->orderBy('comments_count', 'desc')
    //         ->first();
    //     $likes_count_1 = DB::table('likes')->where('user_id', $most_comment->id)->count();
    //     $user_1_count = $most_comment->comments_count + $likes_count_1;
    //     // أكثر مستخدم عمل اعجابات
    //     $most_likes = User::withCount('likes')
    //         ->orderBy('likes_count', 'desc')
    //         ->first();
    //     $comments_count_2 = DB::table('comments')->where('user_id', $most_likes->id)->count();
    //     $user_2_count = $most_likes->likes_count + $comments_count_2;
    //     if ($user_1_count > $user_2_count) {
    //         $active_user = $most_comment->name;
    //         $active_user_likes = $likes_count_1;
    //         $active_user_comments = $most_comment->comments_count;
    //     } else {
    //         $active_user = $most_likes->name;
    //         $active_user_likes = $most_likes->likes_count;
    //         $active_user_comments = $comments_count_2;
    //     }

    //     // اكثر المناشير تفاعلا
    //     // أكثر منشور حائزعلى تعليقات
    //     $most_comment_Post = Post::withCount('comments')
    //         ->orderBy('comments_count', 'desc')
    //         ->first();
    //     $likes_count_post_1 = DB::table('likes')->where('post_id', $most_comment_Post->id)->count();

    //     $post_1_count = $most_comment_Post->comments_count + $likes_count_post_1;
    //     // أكثر منشور حائزعلى اعجابات
    //     $most_likes_post = Post::withCount('likes')
    //         ->orderBy('likes_count', 'desc')
    //         ->first();
    //     $comments_count_post_2 = DB::table('comments')->where('post_id', $most_likes_post->id)->count();
    //     $post_2_count = $most_likes_post->likes_count + $comments_count_post_2;
    //     if ($post_1_count > $post_2_count) {

    //         $active_post = $most_comment_Post->id;
    //         $active_post_likes = $likes_count_post_1;
    //         $active_post_comments = $most_comment_Post->comments_count;
    //     } else {

    //         $active_post = $most_likes_post->id;
    //         $active_post_likes = $most_likes_post->likes_count;
    //         $active_post_comments = $comments_count_post_2;
    //     }

    //     $statistics = array(
    //         'users' => $users,
    //         'posts' => $posts,
    //         'agents' => $agents,
    //         'active_user' => $active_user,
    //         'active_user_likes' => $active_user_likes,
    //         'active_user_comments' => $active_user_comments,
    //         'active_post' => $active_post,
    //         'active_post_likes' => $active_post_likes,
    //         'active_post_comments' => $active_post_comments,
    //         'most_post_publish' => $most_post_publish,
    //     );
    //     dd($statistics);
    //     return view('dashboard.statistics', compact('statistics'));
    // }
    public function agent_state_update($agent_id, Request $request)
    {
        $agent = Agent::find($agent_id);
        $agent->work_state = $request->work_state;
        $agent->save();
        return redirect('show_agents');
    }
    public function user_state_update($user_id, Request $request)
    {
        $user = User::find($user_id);
        $user->role = $request->role;
        $user->save();
        return redirect('users');
    }
    // public function markAsRead($notification_id)
    // {

    //     $notification = Auth::user()->unreadNotifications->where('id', $notification_id)->first();
    //     if ($notification) {
    //         $notification->markAsRead();
    //         return redirect($notification->data['link']);
    //     }
    // }
    public function edit_comment(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $comment->comment = $request->comment;
        $comment->save();
        return response()->json([
            'status' => 200, 'comment' => $comment

        ]);
    }
}
