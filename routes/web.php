<?php
use App\Http\Controllers\adminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// website routes
Route::get('/','websiteController@index')->name('website_index');
Route::post('/send-message','websiteController@message')->name('send_message');

// admin routes
Route::get('/admin','adminController@view')->name('admin_index');

Route::group(['namespace' => 'admin'], function () {
    // user info route
    Route::get('/admin/user','userController@index')->name('user_index');
    // contact message routes
    Route::get('/admin/message','messageController@index')->name('message_index');
    Route::post('/admin/message/soft_delete_multiple/{id}', 'messageController@soft_delete_multiple')->name('soft_delete_multiple');
    Route::post('/admin/message/hard_delete_multiple/{id}', 'messageController@hard_delete_multiple')->name('hard_delete_multiple');
    Route::get('/admin/message/trash', 'messageController@trashView')->name('message_trash');
    Route::get('/admin/message/view/{slug}', 'messageController@view')->name('message_view');
    // frontend logo change
    Route::get('/admin/frontend/logo', 'logoController@index')->name('frontend_logo');
    Route::post('/admin/frontend/logo-update/{slug}', 'logoController@update')->name('frontend_logo_update');
    //navbar update routes
    Route::get('/admin/frontend/nav', 'navController@index')->name('frontend_nav');
    Route::post('/admin/frontend/nav-update/{slug}', 'navController@update')->name('frontend_nav_update');
    // banner part routes
    Route::get('/admin/frontend/banner', 'bannerController@index')->name('frontend_banner');
    Route::get('/admin/frontend/banner-add', 'bannerController@add')->name('frontend_banner_add');
    Route::post('/admin/frontend/banner-add-new', 'bannerController@addbanner')->name('frontend_banner_add_new');
    Route::get('/admin/frontend/banner-update/{slug}', 'bannerController@update')->name('frontend_banner_update');
    Route::post('/admin/frontend/banner-update-banner/{slug}', 'bannerController@update_banner')->name('frontend_banner_update_banner');
    Route::get('/admin/frontend/banner-soft-delete/{slug}', 'bannerController@softdelete')->name('frontend_banner_soft_delete');
    Route::get('/admin/frontend/banner-restore/{slug}', 'bannerController@restore')->name('frontend_banner_restore');
    Route::get('/admin/frontend/banner-delete/{slug}', 'bannerController@delete')->name('frontend_banner_delete');
    Route::get('/admin/frontend/banner-trash-view', 'bannerController@trashview')->name('frontend_banner_trash_view');
    // about me part routes
    Route::get('/admin/frontend/aboutme','aboutmeController@index')->name('frontend_aboutme');
    Route::post('/admin/frontend/aboutme/update/{slug}','aboutmeController@update')->name('frontend_aboutme_update');
});
