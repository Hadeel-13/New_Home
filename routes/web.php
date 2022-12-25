<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\MessageController;
use App\Models\Post;
use App\Http\Controllers\NotificationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// الروتات المتعلقة بتسجيل الدخول والدخول واعدادات كلمة السر الخ
Auth::routes(['verify'=>true]);
// ---------لاظهارالصفحة التواصل-----------
Route::get('/contact',[App\Http\Controllers\MessageController::class, 'index'] )->name('contact');
//---------لادخال رسالة----------
Route::resource('store_message',App\Http\Controllers\MessageController::class);
// ------------لاظهار الصفحة الرئيسية-----------------------
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
// -------عملية البحث في الصفحة الرئيسية----
Route::post('/search_post', [App\Http\Controllers\HomeController::class, 'search_post'])->name('search');
// -------home----
Route::get('/home',function(){
    $posts = Post::with(['comments' => function($q){
        $q -> select('id','post_id','comment');
    }])->get();
    return view('home',compact('posts'));
});
//--------------------------------------Admin_routes_start--------------------------
// -------profile_admin_update_save----
Route::resource('profile_update_save',App\Http\Controllers\AdminController::class)->middleware('IsAdmin');
// -------home_admin----
Route::get('/home_admin', [App\Http\Controllers\HomeController::class, 'admin_home'])->name('admin.home')->middleware('IsAdmin');
// -------home_admin_show----
Route::get('/home_profile', [App\Http\Controllers\AdminController::class, 'show_profile'])->name('admin.profile')->middleware('IsAdmin');
// -------profile_admin_update_show----
Route::get('/home_profile_update', [App\Http\Controllers\AdminController::class,'profile_update_show'])->name('profile.update')->middleware('IsAdmin');
// -------agents_admin_show----
Route::get('/agents_admin', [App\Http\Controllers\AdminController::class, 'show_agents'])->name('agents_admin.show')->middleware('IsAdmin');
// -------users_show----
Route::get('/users', [App\Http\Controllers\AdminController::class, 'show_users'])->name('user.show')->middleware('IsAdmin');
// -------show_message----
Route::get('/show_messages', [App\Http\Controllers\AdminController::class, 'show_messages'])->name('messages.show')->middleware('IsAdmin');
//--------------------------------------Admin_routes_end--------------------------
// -------agents_show----
Route::get('/agents', [App\Http\Controllers\HomeController::class, 'agents_show'])->name('agents.show');
// -------agents_details----
Route::get('/agent_details/{agent_id}', [App\Http\Controllers\HomeController::class, 'agent_details']);
// -------save_comment----
Route::post('comment', [App\Http\Controllers\HomeController::class, 'save_comment'])->name('comment.save');
// -------property_details----
Route::post('/property_details', [App\Http\Controllers\HomeController::class,'property_details'])->name('property_details.show');
// -------user_delete----
Route::get('/user_delete/{id}', [App\Http\Controllers\HomeController::class, 'delete_user'])->name('user.delete');
// -------show_All_posts----
Route::get('/show_posts', [App\Http\Controllers\HomeController::class, 'show_posts'])->name('posts.show');
// -------show_user_posts----
Route::get('/show_user_posts', [App\Http\Controllers\HomeController::class, 'show_user_posts'])->name('user_posts.show');
// -------show_user_saved_posts----
Route::get('/show_user_saved_posts', [App\Http\Controllers\HomeController::class, 'show_user_saved_posts'])->name('admin_saved_posts.show');
//الاشعاراتٍ
Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);
//البحث
Route::get('/search',function(){
    return view('search');
});;
Route::get('/AddRE',function(){
    return view('AddRE');
});;
Route::get('/UpdateRE',function(){
    return view('UpdateRE');
});;