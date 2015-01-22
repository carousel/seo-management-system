<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get("/","HomeController@getIndex");
Route::get("/admin","AdminController@getIndex");
Route::get("/admin/create","AdminController@getCreate");
Route::get("/admin/edit","AdminController@getEdit");
Route::get("/admin/view","AdminController@getView");
Route::post("/admin/create","AdminController@postCreate");
Route::get("/admin/show/{id}","AdminController@getUser");
Route::get("/login","UserController@getLogin");
Route::post("/login","UserController@postLogin");
Route::get("/logout","UserController@getLogout");
