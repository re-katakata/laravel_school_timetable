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

Route::get('/ind', 'ScheduleController@showIndex');

Route::get('/upd', 'ScheduleController@showUpdate');

Route::get('/upd/{schedule}', 'ScheduleController@showEdit');

Route::put('/schedules/{schedule}','ScheduleController@edit');

Route::get('/del/{schedule}', 'ScheduleController@showDelete');

Route::get('/del', 'ScheduleController@showIndexFromDel');

Route::post('/schedules', 'ScheduleController@store');

Route::delete('/schedules/{schedule}/delete', 'ScheduleController@delete');
