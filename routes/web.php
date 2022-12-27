<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\MessageController;
use App\Models\Post;
use App\Http\Controllers\NotificationController;
use GuzzleHttp\Psr7\Request;

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
// Auth::routes(['verify'=>true]);
// الروتات المتعلقة بتسجيل الدخول والدخول واعدادات كلمة السر الخ
Auth::routes();
// ---------لاظهارالصفحة التواصل-----------
Route::get('/contact',[App\Http\Controllers\HomeController::class, 'contact'] )->name('contact');
// ------------لاظهار الصفحة الرئيسية-----------------------
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
// -------home----
Route::get('/home',function(){
    return view('home');
});
//--------------------------------------Admin_routes_start--------------------------
// -------profile_admin_update_save----
Route::post('/profile_update_save',[App\Http\Controllers\HomeController::class, 'profile_update_save']);
// -------home_admin----
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin_home'])->middleware('IsAdmin')->name('admin.home');
// -------home_admin_show----
Route::get('/home_profile', [App\Http\Controllers\AdminController::class, 'show_profile'])->name('admin.profile');
// -------agents_admin_show----
// -------users_show----
Route::get('/users', [App\Http\Controllers\HomeController::class, 'show_users'])->name('user.show');
// -------show_message----
Route::get('/show_messages', [App\Http\Controllers\AdminController::class, 'show_messages'])->name('messages.show');
// حفظ الرسالة
Route::post('/save_message', [App\Http\Controllers\HomeController::class, 'save_message']);
//عرض الاحصائيات
Route::get('statistics', [App\Http\Controllers\HomeController::class, 'statistics'])->name('statistics.show');
// إضافة وكيل
Route::get('/agent_add', [App\Http\Controllers\HomeController::class, 'agent_add']);
// بيانات الموظف
Route::post('/save_agent', [App\Http\Controllers\HomeController::class, 'save_agent']);
// إضافة معلومات حول الشركة
Route::get('/add_information', [App\Http\Controllers\HomeController::class, 'add_information'])->name('add_information');
//  حفظ معلومات حول الشركة
Route::post('/save_information', [App\Http\Controllers\HomeController::class, 'save_information'])->name('save_information');
// عرض المنشورات المميزة بالداشبورد
Route::get('/show_featured_post', [App\Http\Controllers\HomeController::class, 'show_featured_post'])->name('featured_posts.show');
// تعديل حالةالوكيل
Route::post('/agent_state_update/{agent_id}', [App\Http\Controllers\HomeController::class, 'agent_state_update']);
//منع المستخدم من المشاركة
Route::post('/user_state_update/{user_id}', [App\Http\Controllers\HomeController::class, 'user_state_update']);
//عرض واجهة تعديل بيانات الموظف
Route::get('/agent_update/{agent_id}', [App\Http\Controllers\HomeController::class, 'agent_update']);
//تعديل بيانات الموظف
Route::post('/agent_update_save', [App\Http\Controllers\HomeController::class, 'agent_update_save']);
//  عرض المنشورات بقائمة الداشبوورد للمدير
Route::get('/show_control_posts', [App\Http\Controllers\HomeController::class, 'show_control_posts'])->name('control_posts.show');
// جعل المنشور مميزا
Route::post('/make_featured_post', [App\Http\Controllers\HomeController::class, 'make_featured_post']);
// ازالته من المميزة
Route::post('/remove_featured_post', [App\Http\Controllers\HomeController::class, 'remove_featured_post']);
// عرض الوكلاء بقائمة الداشبوورد للمدير
Route::get('/show_agents', [App\Http\Controllers\HomeController::class, 'show_agents'])->name('agents.show');


//--------------------------------------Admin_routes_end--------------------------
// عرض الوكلاء بقائمة الواجهة الرئيسية
Route::get('/index_agents', [App\Http\Controllers\HomeController::class, 'show_index_agents']);
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
// عرض المنشورات المميزة صفحة الرئيسية
Route::get('/index_featured_post', [App\Http\Controllers\HomeController::class, 'featured_post'])->name('index_featured_posts.show');
// اضافة بوست للمحفوظات
Route::post('/add_saved_post', [App\Http\Controllers\HomeController::class, 'add_saved_post']);
// اضافة تعليق
Route::post('/save-comment', [App\Http\Controllers\HomeController::class, 'save_comment']);
// حذف تعليق
Route::post('/delete-comment', [App\Http\Controllers\HomeController::class, 'delete_comment']);
// حذف تعليق
Route::post('/edit-comment', [App\Http\Controllers\HomeController::class, 'edit_comment']);
// like
Route::post('save-like', [App\Http\Controllers\HomeController::class, 'save_like'])->name('like.save');
// dislike
Route::post('save-dislike', [App\Http\Controllers\HomeController::class, 'save_dislike'])->name('dislike.save');
// حذف منشور
Route::post('/delete-post', [App\Http\Controllers\HomeController::class, 'delete_post'])->name('post.delete');
//إزالة المنشور من المحفوظات
Route::post('/remove_saved_post', [App\Http\Controllers\HomeController::class, 'remove_post']);

//حفظ المنشور
Route::post('/save_post', [App\Http\Controllers\HomeController::class, 'save_post']);
// اظهار المنشور
Route::get('/show_post/{post_id}', [App\Http\Controllers\HomeController::class, 'show_post']);
//
Route::get('/city_post/{city_name}', [App\Http\Controllers\HomeController::class, 'city_post']);
// تعديل المنشور
Route::get('/post_update/{post_id}', [App\Http\Controllers\HomeController::class, 'post_update_show']);
// بحث عن طريق الكلمة المفتاحية
Route::get('/open_search', [App\Http\Controllers\HomeController::class, 'open_search']);
// اظهار المنشور
Route::get('/markAsRead',function(){
  auth()->user()->unreadNotifications->markAsRead();
  return redirect()->back();
});
//حفظ المنشور
Route::post('/post_update_save', [App\Http\Controllers\HomeController::class, 'post_update_save']);
//البحث
Route::get('/search',function(){
    $posts=Post::get();
    return view('search',compact('posts'));
});;
Route::get('/AddRE',function(){
    return view('AddRE');
});;
//
Route::post('/search_post', [App\Http\Controllers\HomeController::class, 'search']);
// منشورات البيع
Route::get('/sale_posts', [App\Http\Controllers\HomeController::class, 'sale_posts']);
// منشورات الآجار
Route::get('/rent_posts', [App\Http\Controllers\HomeController::class, 'rent_posts']);
// منشورات الرهن
Route::get('/mort_posts', [App\Http\Controllers\HomeController::class, 'mort_posts']);
// أحدث المنشورات
Route::get('/new_posts', [App\Http\Controllers\HomeController::class, 'new_posts']);
//  أحدث منشورات البيع
Route::get('/new_sale_posts', [App\Http\Controllers\HomeController::class, 'new_sale_posts']);
//  أحدث منشورات الآجار
Route::get('/new_rent_posts', [App\Http\Controllers\HomeController::class, 'new_rent_posts']);
//  أحدث منشورات الرهن
Route::get('/new_mort_posts', [App\Http\Controllers\HomeController::class, 'new_mort_posts']);
//  الملف الشخصي
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'show_profile']);
// //  الملف الشخصي   تعديل
Route::get('/profile_update', [App\Http\Controllers\HomeController::class, 'profile_update']);
//
Route::get('/Profile_anotheruser/{user_id}', [App\Http\Controllers\HomeController::class, 'show_profile_another']);
//  إضافة موظف
Route::post('/add_agent_save', [App\Http\Controllers\HomeController::class, 'add_agent_save']);
//  مصطلحات
Route::get('/names', [App\Http\Controllers\HomeController::class, 'names_show']);

//   chart1
Route::post('/user_year_update', [App\Http\Controllers\HomeController::class, 'update_statistic']);
//  chart2
Route::post('/user_year_update_2', [App\Http\Controllers\HomeController::class, 'update_statistic_2']);
Route::group(['middleware' => 'auth'], function () {
    // Route::get('users', 'App\Http\Controllers\UsersController@index')->name('users');
    Route::post('users/{user}/follow', 'App\Http\Controllers\UsersController@follow');
    Route::delete('users/{user}/unfollow', 'App\Http\Controllers\UsersController@unfollow');
    Route::get('/notifications', 'UsersController@notifications');
    Route::delete('users_home/{user}/unfollow', 'App\Http\Controllers\HomeController@unfollow');

});
Route::get('/kmeans', [App\Http\Controllers\HomeController::class, 'kmeans']);
// // عرض الوكلاء بقائمة الرئيسية
Route::get('/agents', [App\Http\Controllers\HomeController::class, 'agents_show']);
