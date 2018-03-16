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

Route::get('doctors/call', 'DoctorsController@call')->name('doctors.call');
Route::resource('doctors', 'DoctorsController');

Route::resource('users', 'UsersController');

Route::get('appointments/listDoctorApp/{doctor_id}', 'AppointmentsController@listDoctorApp')->name('appointments.listDoctorApp');
Route::resource('appointments', 'AppointmentsController');

//Route::get('appointments/{doctor_id}', 'AppointmentsController@index')->name('appointments.index');
// Route::get('appointments/create', 'AppointmentsController@create')->name('appointments.create');
// Route::post('appointments', 'AppointmentsController@store')->name('appointments.store');
// Route::get('appointments/{appointment_id}', 'AppointmentsController@show')->name('appointments.show');
// Route::get('appointments/{appointment_id}/edit', 'AppointmentsController@edit')->name('appointments.edit');
// Route::put('appointments/{appointment_id}', 'AppointmentsController@update')->name('appointments.update');
// Route::delete('appointments/{appointment_id}', 'AppointmentsController@destroy')->name('appointments.destroy');
//Route::resource('appointments', 'AppointmentsController', ['except' => ['index']]);





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
