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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('doctors', 'DoctorsController');
Route::resource('users', 'UsersController');

Route::get('appointments/{doctor_id}', 'AppointmentsController@index')->name('appointments.index');
Route::resource('appointments', 'AppointmentsController', ['except' => ['index']]);


//Route::get('appointments/{doctor_id}', 'AppointmentsController@index')->name('appointments.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
