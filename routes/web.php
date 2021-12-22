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


//Public Page
    Route::get('/','App\Http\Controllers\PublicController@home');
    Route::get('/aboutus','App\Http\Controllers\PublicController@aboutus');
    Route::get('/preset','App\Http\Controllers\PublicController@preset');
    Route::get('/search','App\Http\Controllers\PublicController@search');
    
    Route::get('/tutorial','App\Http\Controllers\PublicController@tutorial');

    //VIEW PRODUCT DETAIL
    Route::get('/view/{product}','App\Http\Controllers\PublicController@view');

    //LOGIN
    Route::get('/account','App\Http\Controllers\PublicController@account')->name('login')->middleware('guest');

//Account Routing
    Route::post('/register','App\Http\Controllers\AccountController@register');
    Route::post('/login','App\Http\Controllers\AccountController@login');
    Route::get('/logout','App\Http\Controllers\AccountController@logout');
    Route::get('/cart','App\Http\Controllers\AccountController@cart');
    Route::get('/addtocart/{id}','App\Http\Controllers\AccountController@addtocart');
    // Chat Routing
        Route::get('/chat','App\Http\Controllers\ChatController@chat');
        Route::post('/sendMsg/{id}','App\Http\Controllers\ChatController@sendMsg');

// Admin routing
Route::group(['middleware'=>['AdminCheck']],function()
{
    Route::get('/manage','App\Http\Controllers\AdminController@manage');
    Route::post('/insert','App\Http\Controllers\AdminController@post_insert');
    Route::get('/insert','App\Http\Controllers\AdminController@insert');
    Route::get('/update','App\Http\Controllers\AdminController@update');
    // Route::get('delete-records','App\Http\Controllers\AdminController@index');
    Route::get('delete/{id}','App\Http\Controllers\AdminController@destroy');
});