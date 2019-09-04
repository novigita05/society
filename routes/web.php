<?php

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
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('master', function () {
    return view('master');
});

Route::resource('members','MembersController');

Route::resource('news','NewsController');

Route::resource('announcement','AnnouncementController');

Route::resource('activity','ActivityController');

Route::resource('complaint','ComplaintController');

Route::resource('community','CommunityController');

Route::resource('posting','PostingController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/showNews/{id}','NewsController@detailNews')->name('showNews');

Route::get('/ShowNews','NewsController@show')->name('ShowNews');

Route::get('/showMembers/{id}','MembersController@detailMembers')->name('showMembers');

Route::get('/ShowMembers','MembersController@show')->name('ShowMembers');

Route::get('/showAnnouncement/{idAnnouncement}','AnnouncementController@detailAnnouncement')->name('showAnnouncement');

Route::get('/ShowAnnouncement','AnnouncementController@show')->name('ShowAnnouncement');

Route::get('/showComplaint/{id}','ComplaintController@detailComplaint')->name('showComplaint');

Route::get('/ShowComplaint','ComplaintController@show')->name('ShowComplaint');

Route::get('/showCommunity/{id}','CommunityController@detailCommunity')->name('showCommunity');

Route::get('/ShowCommunity','CommunityController@show')->name('ShowCommunity');

Route::get('/showPosting/{id}','PostingController@detail')->name('showPost');

Route::get('/ShowPosting','PostingController@show')->name('ShowPost');