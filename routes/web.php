<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

//All Users
Route::get('/', function(){ return redirect('home'); })->middleware('prevent.back');
Route::get('/home', 'HomeController@index')->middleware('prevent.back');
Route::get('/category/{id}', 'CategoryController@index')->middleware('prevent.back');
Route::get('/detail/{id}', 'ArticleController@index')->middleware('prevent.back');
Route::get('/about_us', 'HomeController@about_us')->middleware('prevent.back');

//Member Only
Route::group(['middleware' => ['auth', 'member', 'prevent.back']], function(){
    Route::get('/member/home', 'HomeController@member_home');
    Route::get('/member/profile', 'UserController@profile');
    Route::get('/member/blog', 'ArticleController@blog');
    Route::get('/member/blog/delete/{id}', 'ArticleController@delete');
    Route::get('/member/blog/create', 'ArticleController@create');
    Route::get('/member/category/{id}', 'CategoryController@index')->name('member/category');
    Route::get('/member/detail/{id}', 'ArticleController@index')->name('member/detail');

    Route::post('/member/profile/update', 'UserController@update')->name('update');
    Route::post('/member/blog/save', 'ArticleController@save')->name('save');
});

//Admin Only
Route::group(['middleware' => ['auth','admin','prevent.back']], function(){
    Route::get('/admin/home', 'HomeController@admin_home');
    Route::get('/admin/article', 'ArticleController@show_all');
    Route::get('/admin/article/delete/{id}', 'ArticleController@delete');
    Route::get('/admin/user', 'UserController@show_all');
    Route::get('/admin/user/delete/{id}', 'UserController@delete');
    Route::get('/admin/category/{id}', 'CategoryController@index')->name('admin/category');
    Route::get('/admin/detail/{id}', 'ArticleController@index')->name('admin/detail');
});