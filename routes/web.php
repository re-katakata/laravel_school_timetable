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

Route::get('/ind', 'ScheduleController@showIndex')->middleware('auth');

Route::get('/upd', 'ScheduleController@showUpdate')->middleware('auth');

Route::get('/upd/{schedule}', 'ScheduleController@showEdit')->middleware('auth');

Route::put('/schedules/{schedule}','ScheduleController@edit')->middleware('auth');

Route::get('/del/{schedule}', 'ScheduleController@showDelete')->middleware('auth');

Route::get('/del', 'ScheduleController@showIndexFromDel')->middleware('auth');

Route::post('/schedules', 'ScheduleController@store')->middleware('auth');

Route::delete('/schedules/{schedule}/delete', 'ScheduleController@delete')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
