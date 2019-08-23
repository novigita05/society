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
