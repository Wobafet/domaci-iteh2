<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PassengerController;

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


Route::get('/passenger','PassengerController@index');
Route::get('/','WelcomeController@index');
Route::get('/schedule','ScheduleController@index');
Route::get('/schedule/trip','ScheduleController@getForm');
Route::delete('/schedules/delete/{schedule_id}','ScheduleController@delete');
Route::post('/trip/post','PassengerController@addPassenger');
