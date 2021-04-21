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
    return view('welcome');
});
Route::get('/ind', function () {
    return view('Index/index');
});
Route::get('/del', function () {
    return view('Delete/delete');
});
Route::get('/upd', function () {
    return view('Update/update');
});

Route::get('/schedules', 'ScheduleController@index');