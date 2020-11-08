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

Route::get('/', function () {
    return view('home');
});
Route::get('/course/registration', 'RisyuController@create');
Route::get('/course/registration/confirm', 'RisyuController@confirm');
Route::get('/list', 'RisyuController@subjectIndex');
Route::get('/get/credit', 'RisyuController@creditIndex');
Route::get('/graduation/credit', 'RisyuController@graduationSetting');
Route::get('/password', 'RisyuController@passwordEdit');