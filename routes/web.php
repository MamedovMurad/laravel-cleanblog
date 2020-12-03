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

//back route
Route::get('manage/giris','App\Http\Controllers\Back\AuthLogin@login')->name('admin.login');
Route::post('manage/giris','App\Http\Controllers\Back\AuthLogin@loginpost')->name('admin.login.post');
Route::prefix('manage')->name('admin.')->middleware('isAdmin')->group (function () {
    Route::get('/','App\Http\Controllers\Back\Dashboard@index')->name('dashboard');
Route::resource('meqaleler', 'App\Http\Controllers\Back\ArticleController');
Route::get('cikis','App\Http\Controllers\Back\AuthLogin@logout')->name('cikis');



});









// front route

Route::get('/', 'App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::get('data', 'App\Http\Controllers\Front\Homepage@indexs')->name('data');

Route::post('/loadmore', 'App\Http\Controllers\Front\Homepage@load_data')->name('loading');
Route::get('elaqe','App\Http\Controllers\Front\Homepage@contact')->name('contact');
Route::post('elaqe','App\Http\Controllers\Front\Homepage@contactpost')->name('contact.post');
Route::get('/kategori/{slug}','App\Http\Controllers\Front\Homepage@category')->name('category');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\Homepage@detail')->name('detail');
Route::get('/{slug}','App\Http\Controllers\Front\Homepage@page')->name('page');



