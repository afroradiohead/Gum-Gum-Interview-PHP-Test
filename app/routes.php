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

Route::get('/', "HomeController@onGet");
Route::get('/list', "ListController@onGet");
Route::get('/report', "ReportController@onGet");
Route::post('/upload', "UploadController@onPost");
Route::post('/upload/onConfirm', "UploadController@onConfirm");