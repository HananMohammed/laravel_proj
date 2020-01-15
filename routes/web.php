<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
------------------------------------------------------------------------------------
Notes:The router allows you to register routes that respond to any HTTP verb:
           Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
----------------------------------------------------------------------------

Redirect Routes:If you are defining a route that redirects to another URI, you may use the Route::redirect method. This method provides a convenient shortcut so that you do not have to define a full route or controller for performing a simple redirect:

Route::redirect('/here', '/there');
=================================================================================
route parameters::are always encased within {} braces 
Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});:::
================================================================================
Regular Expression Constraints:::
Route::get('user/{name}', function ($name) {
    //
})->where('name', '[A-Za-z]+');

*/
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/items', function () {
    return view('items');
})->middleware('auth');
Route::POST('signup/save','signup@signup');

//start of supplier sections 
Route::get('/setting', function () {
    return view('setting');
});

Route::get('/setting', function () {
    return view('setting');
});
Route::get('setting','supplier_control@profile_data');
//applying middle ware on adding item 
Route::get('/add_item', function () {
    return view('add_item');
})->middleware('middleware_approve');
Route::POST('add_item/add','supplier_control@add_item');
Route::get('/edit_profile', function () {
    return view('edit_profile');
});

Route::get('edit_profile','supplier_control@get_profile_data_to_edit');
Route::POST('edit_profile/update','supplier_control@edit_profile');
Route::get('items','anony@all_items');
/////////////////////search in items page   /////////////////////////////////////////
Route::post('items/search','anony@get_items_search');
//////////////////////item details design/////////////////
Route::get('/item_detail', function () {
    return view('item_detail');
});
//////////////////////////////////////////////////////////
Route::POST('items/more','anony@get_item_detail');

/////////////////////supplier login///////////////////////
Route::get('/login_supplier', function () {
    return view('login_supplier');
});
Route::POST('login_supplier/login','signup@login');

//--------------------supplier_items---------------------------------------
Route::get('/supplier_items',function(){
    return view('supplier_items');
});
Route::get('supplier_items','supplier_control@supplier_items');
//---------------------Edit item ----------------
Route::POST('supplier_items/edit','supplier_control@edit_item');
//--------------------done-Edit item in DB ----------------
Route::POST('supplier_items/save','supplier_control@edit_item_done');
//--------------------done-Edit item in DB ----------------
Route::POST('supplier_items/delete','supplier_control@delete_item');
Route::get('/Logout','signup@logout');



 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
