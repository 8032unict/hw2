<?php

use Illuminate\Support\Facades\Route;



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
    if(session('username') != null){
        return redirect('home')
            ->with('csrf_token', csrf_token());
    }
    else{
        return redirect('login');
    }
    
});

Route::get('/login','App\Http\Controllers\LoginController@login')->name('login');  //funziona
Route::post('/login','App\Http\Controllers\LoginController@checkCredentials'); //funziona
Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('logout'); //funziona

Route::get('/register','App\Http\Controllers\RegisterController@register')->name("register");
Route::post('/register','App\Http\Controllers\RegisterController@registerUser');
Route::get('/register/usernamecheck/{q}','App\Http\Controllers\RegisterController@checkUsername');
Route::get('/register/emailcheck/{q}','App\Http\Controllers\RegisterController@checkEmail'); //ok

Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');
Route::post('/home/sendpost/','App\Http\Controllers\HomeController@sendPost')->name("sendpost");
Route::get('/home/randomfox/','App\Http\Controllers\HomeController@fox');
Route::get('/home/showPosts/{q}','App\Http\Controllers\PostController@showPosts');
Route::get('/home/deletePost/{q}','App\Http\Controllers\PostController@deletePost');
Route::get('/home/showMyPosts/','App\Http\Controllers\PostController@showMyPosts');
Route::get('/home/searchPosts/{q}','App\Http\Controllers\PostController@searchPosts');


?>