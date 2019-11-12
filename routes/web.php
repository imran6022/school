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


//admin 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//gallary
Route::get('/admin/gallary', 'HomeController@admin_gallary')->name('admin.gallary');
Route::get('/admin/add_photo', 'HomeController@add_photo')->name('admin.add_photo');
Route::post('/admin/store_photo', 'HomeController@store_photo')->name('admin.store_photo');
Route::get('/admin/gallary/delete{id}', 'HomeController@gallary_delete')->name('admin.gallary.delete');
//notice
Route::get('/admin/notice', 'HomeController@notice')->name('admin.notice');
Route::get('/admin/add_notice', 'HomeController@add_notice')->name('admin.add_notice');
Route::post('/admin/store_notice', 'HomeController@store_notice')->name('admin.store_notice');
Route::get('/admin/notice/delete{id}', 'HomeController@notice_delete')->name('admin.notice.delete');



// fontent

Route::get('/', 'fontedController@index')->name('index');
Route::get('aboutUs', 'fontedController@aboutUs')->name('aboutUs');
Route::get('teachers', 'fontedController@teachers')->name('teachers');
Route::get('gallary', 'fontedController@gallary')->name('gallary');
Route::get('contact', 'fontedController@contact')->name('contact');
Route::get('notice/view{id}', 'fontedController@notice_view')->name('notice.view');