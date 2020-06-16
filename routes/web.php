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

Route::get('/', 'homeController@index');

Route::get('/makeEvent', 'homeController@createEvent');
Route::get('/makeGuest','homeController@createGuest');
Route::get('/makeCompany','homeController@createCompany');

Route::post('/eventStore', 'eventController@store')->name('event.store');
Route::post('/guestStore','guestController@store')->name('guest.store');
Route::post('/companyStore', 'companyController@store')->name('company.store');


