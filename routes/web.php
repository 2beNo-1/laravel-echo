<?php

use App\Events\PublicMessageEvent;
use App\Events\PrivateMessageEvent;

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

Route::get('/', function () {
    return redirect('home');
});
Route::get('chat', 'ChatController@getIndex');
Route::get('chatting', 'ChatController@connect');
Route::group(['prefix' => 'test'], function () {
    Route::get('index', 'TestController@getIndex');
    Route::get('push', 'TestController@getPush');
    Route::get('privatePush', 'TestController@privatePush');
});
Auth::routes();

//前台登录路由
Route::group(['namespace' => 'Home'], function () {
    Route::get('login', 'SelfController@getLogin');
    Route::post('login', 'SelfController@postLogin');
    Route::post('reg', 'SelfController@postReg');
    Route::get('logout', 'SelfController@getLogout');
});

Route::group(['namespace' => 'Home'], function () {
    Route::resource('home', 'HomeController');
    Route::resource('designer', 'DesignerController');
    Route::resource('display', 'DisplayController');
    Route::resource('knowledge', 'KnowledgeController');
    Route::resource('activity', 'ActivityController');
    Route::resource('recruit', 'RecruitController');
    Route::resource('about', 'AboutController');
    Route::resource('self', 'SelfController')->middleware('member');
    Route::post('check-reg', 'SelfController@checkReg');
    Route::post('get-service', 'SelfController@postTimeAndPrice');
    Route::post('get-schedule', 'SelfController@postThisDesignerSchedule');
});

//后台登录路由
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('login', 'UserController@getLogin')->name('admin.login');
    Route::post('login', 'UserController@postLogin');
    Route::get('logout', 'UserController@getLogout');
});

//后台用户路由
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('/', 'UserController');
    Route::resource('/shopowner', 'ShopownerController');
    Route::get('message-list', 'ShopownerController@messageList');//消息列表
    Route::get('case-show', 'ShopownerController@caseShow');//发型列表
    Route::resource('/clerk', 'ClerkController');
    Route::get('calendar-list', 'ClerkController@calendarList');
    Route::post('upload-photo', 'UploadController@uploadFile');
});