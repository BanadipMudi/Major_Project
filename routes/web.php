<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\fakesignup;
use App\Http\Controllers\Jsoncontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\notificationManage;
use App\Http\Controllers\signupLogincontroller;
//-----------------------admin-------------------
use App\Http\Controllers\hotelcontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\mycontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});
// Route::get('/user/home', function () {
//     return view('user.mainbody');
// })->name('user.home');




// Route::get('/user/create',[usercontroller::class,'subcatagory'])->name('user.subcatagory');


// Route::get('/user/post/1', function () {
//     return view('user.view_single_post');
// })->name('user.post');
// Route::get('/user/myquestions', function () {
//     return view('user.myquestions');
// })->name('user.myquestions');
// Route::get('/csstest', function () {
//     return view('csstest');
// });





Route::get('/answerbag', function () {
    return view('user.answerbag');
});

Route::controller(signupLogincontroller::class)->group(function() {
    
    Route::post('/user/signup', 'signup')->name('user.signup');
    Route::post('/user/login', 'login')->name('user.login');
    Route::get('/email', 'email');
    Route::get('/user/logout', 'logout')->name('user.logout');
    
});

Route::middleware(['logincheck'])->group(function(){
    Route::get('/user/home/{id?}',[fakesignup::class,'allpost'])->name('user.home');
    Route::get('/user/create',[usercontroller::class,'catagory'])->name('user.create');
    //here we can add more routes
    Route::get('/user/cancel',[usercontroller::class,'cancel'])->name('user.cancel');
Route::post('/image/upload',[usercontroller::class,'create_upload'])->name('image.upload');
Route::post('/image/delete', [usercontroller::class,'delete_image'])->name('image.delete');
Route::post('/all/submit', [usercontroller::class,'allsubmit'])->name('all.submit');


Route::get('/get/submit', [usercontroller::class,'getsubmitdata']);

//--------------------fake sign up
// Route::get('/user/signup', [fakesignup::class,'show']);
// Route::post('/user/signup', [fakesignup::class,'signup'])->name('sign-up'); // sign up complete

//-------------------in fake signup class------------------
Route::get('/user/myquestions', [fakesignup::class,'seeDetails'])->name('user.myquestions'); // my questions complete
Route::get('/user/post/{id}',[fakesignup::class,'seeSinglePost'])->name('user.post');
Route::post('/user/report',[fakesignup::class,'uesr_report'])->name('user.report');


//-----------------in fake sign up class-----comment----
Route::post('/question/answer', [fakesignup::class,'question_answer'])->name('question.answer');
//-----------------in fake sign up class-----like dislike----
Route::post('/like/dislike', [fakesignup::class,'like_dislike'])->name('like.dislike');

Route::get('/user/testing/html', function () {
    return view('testinghtml');
});


//-----------------in jsoncontroller class---------
Route::get('/json/store', [Jsoncontroller::class,'store'])->name('json.test');
Route::get('/json/test', [Jsoncontroller::class,'index']);
Route::get('/json/getjson', [Jsoncontroller::class,'getjson']);
Route::get('/json/appjson', [Jsoncontroller::class,'appendjson']);

//-----------------------------this is for questions -----to like or dislike the post----------
Route::post('question/like/dislike', [Jsoncontroller::class,'question_likedislike'])->name('question.likedislike');
//-----------------------------this is for ansers -----to like or dislike the post----------
Route::post('answer/like/dislike', [Jsoncontroller::class,'answer_likedislike'])->name('answer.likedislike');

//-----------------------------fetch from bookmark----------
Route::get('/user/savedpost',[Jsoncontroller::class,'bookmark'])->name('user.bookmark');

Route::post('/user/savedpost',[Jsoncontroller::class,'post_bookmark'])->name('user.postbookmark');
Route::post('/bookmark/delete',[Jsoncontroller::class,'bookmark_delete'])->name('bookmark.delete');


Route::get('/user/subcatagory/{subcatagory}',[fakesignup::class,'subcatagory_select']);
Route::get('/user/catagory/{catagory}',[fakesignup::class,'catagory_select']);


Route::get('/user/answers',[fakesignup::class,'myanswers'])->name('user.myanswers');
Route::post('/user/answers',[fakesignup::class,'delete_answer'])->name('myanswer.delete');


Route::get('/user/following', [ProfileController::class,'Get_following'])->name('user.following');
Route::post('/user/following', [ProfileController::class,'delete_following'])->name('delete.following');
Route::post('/user/followback', [ProfileController::class,'follow_back'])->name('follow.back');
Route::post('/otheruser/followUnfollow', [ProfileController::class,'followUnfollow'])->name('otheruser.followUnfollow');

Route::get('/user/profile',[ProfileController::class,'profile'])->name('user.profile');
Route::get('/user/profile/{id}',[ProfileController::class,'profile'])->name('user.outherprofile');
Route::post('/user/profile',[ProfileController::class,'profile_update'])->name('user.profileUpdate');

Route::get('/user/session',[ProfileController::class,'session']);

Route::get('/user/search',[ProfileController::class,'search_show']);
Route::post('/user/search',[ProfileController::class,'search_something']);
Route::get('/user/search/testing',[ProfileController::class,'search_something']);

Route::get('/user/notification',[notificationManage::class,'getNotification'])->name('user.notification');
Route::get('/user/seesingleanswers/{id}',[notificationManage::class,'see_single_answers']);
Route::get('/user/seeansreport/{id}',[notificationManage::class,'see_single_answers_report']);
Route::get('/user/seetakeaction/{rid}/{nid}',[notificationManage::class,'see_take_action']);
});

// ADMIN............. 
// Route::view('/admin/dashboard','Admin.dashboard');
//  Route::view('/admin/login','Admin.login');
// Route::view('/admin/choice','Admin.choice');
Route::view('/admin/setting','admin.setting');
// Route::view('/admin/questions','Admin.questions');
// Route::view('/admin/reports','Admin.reports');
// Route::view('/admin/answers','Admin.answer');
// Route::view('table','Admin.table');
Route::get('conn',[hotelcontroller::class,'conn']);
// Route::get('table',[hotelcontroller::class,'getcdata']);
Route::get('/admin/questions',[hotelcontroller::class,'questiondata']);
// Route::get('answer',[hotelcontroller::class,'answerdata']);
Route::get('/admin/answers',[hotelcontroller::class,'answerdata']);
// Route::get('/approve-ans/{id}',[hotelcontroller::class,'flag']);
Route::post('/admin/approve-ans',[hotelcontroller::class,'flag']);
Route::post('/admin/reject-ans',[hotelcontroller::class,'rejectflag']);
// Route::post('/admin/approve-ans',[hotelcontroller::class,'deletedata']);


Route::post('/admin/approve/question', [hotelcontroller::class,'approve_question'])->name('admin.approve');
Route::post('/subcatagory', [hotelcontroller::class,'subcatagory'])->name('admin.getsubcatagory');

// Route::get('url',[hotelcontroller::class,'catagory']);
Route::get('question-approveflag/{q_id}', [hotelcontroller::class,'updateQuestionFlag']);
Route::get('question-rejectflag/{q_id}', [hotelcontroller::class,'rejectQuestionFlag']);

Route::get('/admin/choice', [hotelcontroller::class,'getchoice'])->name('admin.categorychoice');
Route::post('/admin/choice/category', [hotelcontroller::class,'CategoryName'])->name('admin.selectedcategory');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/reports', [DashboardController::class, 'report'])->name('report');
Route::post('/get-answer-id', [DashboardController::class, 'getAnswerId']); 
Route::post('/send/mail/data', [DashboardController::class, 'mails'])->name('send.mail.data');
Route::get('/delete/{id}/{reporting_user_id}', [DashboardController::class, 'delete'])->name('delete.data');




Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard2', 'dashboard')->name('dashboard2');
    Route::get('/logout', 'logout')->name('logout');
});

// ------------------------super Admin---------
Route::get('/template', function () {
    return view ('Super_admin.dashboard.index');
});
Route::get('/admin-login', function () {
    return view ('admin.login');
});
Route::get('/admin', function () {
    return view ('admin.index');
});
// Route::get('/read', function () {
//     return view ('admin.dashboard.read');
// });

Route::get('/super-admins-list',[mycontroller::class,'aladm']);

Route::get('/bannadm/{id}',[mycontroller::class,'bann_func']);

Route::get('/unbannadm/{id}',[mycontroller::class,'unbann_func']);

Route::get('/rvkadm/{id}',[mycontroller::class,'rvk_func']);

Route::get('/mdlusr/{id}/{cd}',[mycontroller::class,'mdl_func']);

Route::get('/mdlusr1/{id}',[mycontroller::class,'mdl_func1']);

Route::get('/inv_hit/{eml}/{prv}',[mycontroller::class,'inv_func']);

Route::get('/adm_hit/{id}/{prv}/{prv_id}',[mycontroller::class,'adm_func']);

Route::get('/chng_bann/{id}',[mycontroller::class,'chng_bann']);

Route::get('/dt_tst/{id}',[mycontroller::class,'dt_tst']);

Route::view('hello','admin.dashboard.gdsgsd');
// Route::get('/adm_hit/{id}/{prv}/{prv_id}',function(){
//     return redirect('/super-admins-list');
// });

// Route::get('/tst',[mycontroller::class,'test']);

Route::get('/users',[mycontroller::class,'alusrs']);

Route::get('tst',function(){
    return "hello";
});
Route::get('/gtuser/{id}',[mycontroller::class,'gtt']);

Route::get('/getcat/{id}',[mycontroller::class,'gttcat']);

Route::get('/onlyusr',[mycontroller::class,'usronly']);
// Route::get('/modal', function () {
//     return view ('admin.dashboard.modal');
// });


