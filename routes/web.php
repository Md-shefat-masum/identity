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
Route::get('/home', 'websiteController@index')->name('home');

// website routes
Route::get('/','websiteController@index')->name('website_index')->middleware('preventBackButton');
Route::post('/send-message','websiteController@message')->name('send_message');

// admin routes
Route::group(['middleware' => ['preventBackButton','auth']], function () {
    Route::get('/admin','adminController@view')->name('admin_index');
});


Route::group(['namespace' => 'admin'], function () {
    // user info route
    Route::get('/admin/user','userController@index')->name('user_index');
    Route::post('/admin/add-user','userController@add')->name('user_add');
    // Route::get('/admin/view-user/{slug}','userController@view')->name('user_view');
    Route::get('/admin/view-user-modal/{slug}','userController@viewm')->name('user_viewm');
    Route::post('/admin/update-user-modal/{slug}','userController@update')->name('user_update');
    Route::get('/admin/update-user-soft-delete/{slug}','userController@softdelete')->name('user_soft_delete');
    Route::get('/admin/update-user-restore/{slug}','userController@restore')->name('user_restore');
    Route::get('/admin/update-user-hard-delete/{slug}','userController@harddelete')->name('user_hard_delete');
    // user settings
    Route::get('/admin/user/settings/{slug}','userController@user_setting')->name('user_settings');
    Route::post('/admin/user/setting/change/{slug}','userController@user_setting_change')->name('user_setting_change');
    Route::get('/admin/user/profile/{slug}','userController@user_profile')->name('user_profile');
    // user role controll route
    Route::get('/admin/user-role','userRoleController@index')->name('user_role_index');
    Route::post('/admin/user-role-add','userRoleController@add')->name('user_role_add');
    Route::post('/admin/user-role-update/{slug}','userRoleController@update')->name('user_role_update');
    Route::get('/admin/user-role-delete/{slug}','userRoleController@delete')->name('user_role_delete');
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
    // service section
    Route::get('/admin/frontend/service','serviceController@index')->name('frontend_service');
    Route::get('/admin/frontend/service-trash','serviceController@trash')->name('frontend_service_trash');
    Route::get('/admin/frontend/service-add','serviceController@add')->name('frontend_service_add');
    Route::post('/admin/frontend/service-addfn','serviceController@addfn')->name('frontend_service_addfn');
    Route::post('/admin/frontend/service-update/{slug}','serviceController@update')->name('frontend_service_upadate');
    Route::get('/admin/frontend/service-soft-delete/{slug}','serviceController@softdelete')->name('frontend_service_soft_delete');
    Route::get('/admin/frontend/service-hard-delete/{slug}','serviceController@harddelete')->name('frontend_service_hard_delete');
    Route::get('/admin/frontend/service-restore/{slug}','serviceController@restore')->name('frontend_service_restore');
    // port folio category routes
    Route::get('/admin/frontend/portfolio-category','portfolioController@index')->name('fortfolio_categories');
    Route::get('/admin/frontend/portfolio-category-add','portfolioController@add')->name('fortfolio_categories_add');
    Route::post('/admin/frontend/portfolio-category-addfn','portfolioController@addfn')->name('fortfolio_categories_addfn');
    Route::get('/admin/frontend/portfolio-category-trash','portfolioController@trash')->name('fortfolio_categories_trash');
    Route::get('/admin/frontend/portfolio-category-soft-delete/{slug}','portfolioController@softdelete')->name('fortfolio_categories_soft_delete');
    Route::get('/admin/frontend/portfolio-categorydelete/{slug}','portfolioController@harddelete')->name('fortfolio_categories_delete');
    Route::post('/admin/frontend/portfolio-category-update/{slug}','portfolioController@update')->name('fortfolio_categories_update');
    // port folio images routes
    Route::get('/admin/frontend/portfolio-images','portfolioimageController@index')->name('portfolio_image');
    Route::get('/admin/frontend/portfolio-images-add','portfolioimageController@add')->name('portfolio_image_add');
    Route::post('/admin/frontend/portfolio-images-addfn','portfolioimageController@addfn')->name('portfolio_image_addfn');
    Route::get('/admin/frontend/portfolio-images-trash','portfolioimageController@trash')->name('portfolio_image_trash');
    Route::get('/admin/frontend/portfolio-images-softdelete/{slug}','portfolioimageController@softdelete')->name('portfolio_image_softdelete');
    Route::get('/admin/frontend/portfolio-images-harddelete/{slug}','portfolioimageController@harddelete')->name('portfolio_image_harddelete');
    Route::get('/admin/frontend/portfolio-view','portfolioimageController@projectview')->name('portfolio_full_view');
    // skills routes
    Route::get('/admin/frontend/skill','personalskillController@index')->name('skills');
    Route::get('/admin/frontend/skill-add','personalskillController@add')->name('skill_add');
    Route::post('/admin/frontend/skill-add-fn','personalskillController@addfn')->name('skill_add_fn');
    Route::post('/admin/frontend/skill-update-fn/{slug}','personalskillController@updatefn')->name('skill_update_fn');
    Route::get('/admin/frontend/skill-delete-fn/{slug}','personalskillController@deletefn')->name('skill_delete_fn');
    // language skill routes
    Route::get('/admin/frontend/lskill','languageController@index')->name('lskills');
    Route::get('/admin/frontend/lskill-add','languageController@add')->name('lskill_add');
    Route::post('/admin/frontend/lskill-add-fn','languageController@addfn')->name('lskill_add_fn');
    Route::post('/admin/frontend/lskill-update-fn/{slug}','languageController@updatefn')->name('lskill_update_fn');
    Route::get('/admin/frontend/lskill-delete-fn/{slug}','languageController@deletefn')->name('lskill_delete_fn');
    // cv routes
    Route::get('/admin/frontend/cv','cvController@index')->name('bio_data');
    Route::post('/admin/frontend/cv-update/{slug}','cvController@update')->name('bio_data_update');
    // resume categories
    Route::get('/admin/frontend/resume-category', 'resumeController@resumeindex')->name('resume_category');
    Route::post('/admin/frontend/resume-category-add', 'resumeController@resumeadd')->name('add_resume_category');
    Route::post('/admin/frontend/resume-category-update/{slug}', 'resumeController@resumeupdate')->name('resume_category_update');
    Route::get('/admin/frontend/resume-category-delete/{slug}', 'resumeController@resumedelete')->name('resume_category_delete');
    // resume sections
    Route::get('/admin/frontend/resume-section', 'resumeController@index')->name('resume');
    Route::get('/admin/frontend/resume-add-view', 'resumeController@addView')->name('resume_add_view');
    Route::post('/admin/frontend/resume-add', 'resumeController@add')->name('resume_add');
    Route::get('/admin/frontend/resume-update-view/{slug}', 'resumeController@updateView')->name('resume_update_view');
    Route::post('/admin/frontend/resume-update/{slug}', 'resumeController@update')->name('resume_update');
    // client part
    Route::get('/admin/frontend/client', 'clientController@index')->name('client');
    Route::post('/admin/frontend/client-post-add', 'clientController@add')->name('client_post_add');
    Route::get('/admin/frontend/client-post-delete/{slug}', 'clientController@delete')->name('client_post_delete');
    // partner route
    Route::get('/admin/frontend/partner', 'partnerController@index')->name('partner');
    Route::post('/admin/frontend/partner-add', 'partnerController@add')->name('partner_add');
    Route::get('/admin/frontend/partner-delete/{slug}', 'partnerController@delete')->name('partner_delete');
    // process route
    Route::get('/admin/frontend/process', 'processController@index')->name('process');
    Route::post('/admin/frontend/process-add', 'processController@add')->name('process_add');
    Route::post('/admin/frontend/process-update/{slug}', 'processController@update')->name('process_update');
    Route::get('/admin/frontend/process-delete/{slug}', 'processController@delete')->name('process_delete');
    // footer route
    Route::get('/admin/frontend/footer', 'footerController@index')->name('footer_index');
    Route::post('/admin/frontend/footer/update/{slug}', 'footerController@update')->name('footer_update');
    // social links
    Route::get('/admin/social-links', 'personalinfoController@index')->name('social_link');
    Route::post('/admin/social-links-add', 'personalinfoController@add')->name('social_link_add');
    Route::post('/admin/social-links-update/{slug}', 'personalinfoController@update')->name('social_link_update');
    Route::get('/admin/social-links-delete/{slug}', 'personalinfoController@delete')->name('social_link_delete');
    // font awesome icon
    Route::get('/admin/font-awesome-icon', 'personalinfoController@icons')->name('font_icon');
});
