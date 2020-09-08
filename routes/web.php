<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('accesor','AccesorsController');

Route::resource('doctor','AccesorsController');

Route::resource('flightinfo','FlightiformationsController');

Route::resource('medical','MedicalsController');

Route::resource('accident','AccidentsController');

Route::resource('alcohol','AlcoholsController');

Route::resource('tobacco','TobaccoproductsController');

Route::resource('medication','MedicationsController');

Route::resource('restriction','RestrictionsController');

Route::resource('medhistory','MedicalhistoriesController');

Route::resource('famhistory','FamhistoriesController');

Route::resource('applicants','ApplicantsController');

Route::resource('appointment','AppointmentsController');

Route::resource('clinical','ClinicsController');

Route::get('clinical/create/{id}','ClinicsController@create');

Route::get('phy/create/{id}','PhysController@create');

Route::resource('phy','PhysController');

Route::resource('eye','EyeController');
Route::get('eye/create/{id}','EyeController@create');





