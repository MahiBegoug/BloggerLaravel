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
/*
Route::get('/', function () {
    return view('welcome');
})*/

/*Route::get('/about',function(){
    return view('pages.about');
});
/*
Route::get('/users/{id}/{name}',function($id,$name){
    return 'This is user < '.$name.' > with an id of < '.$id.' >';
});*/

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Admin routes
Route::prefix('admin')->group(function(){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
