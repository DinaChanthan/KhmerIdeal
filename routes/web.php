<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

// route to admin dashboard
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// route to get content data
Route::get('/', 'App\Http\Controllers\ContentController@index')->name('news_content');

// route to get specific content data
Route::get('/{contentID}', 'App\Http\Controllers\DetailNewsController@index')->name('news_detail');

// route to news cateogry data
Route::get('/news_category/{newCateogryID}', 'App\Http\Controllers\CategoryController@index')->name('news_category');
