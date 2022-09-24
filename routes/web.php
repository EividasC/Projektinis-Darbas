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

Route::get('/Airports', function () {
    return view('Airports');
});

Route::get('/Countries', function () {
    return view('Countries');
});

Route::get('/Airlines', function () {
    return view('Airlines');
});

Route::get('/New_Airlines', function () {
    return view('New_Airlines');
});

Route::get('/New_Countries', function () {
    return view('New_Countries');
});


Route::get('/New_Airports', function () {
    return view('New_Airports');
});

Route::get('/New_Addairline', function () {
    return view('New_Addairline');
});

Route::get('/New_RemoveAirline', function () {
    return view('New_RemoveAirline');
});

Route::get('/New_edit', function () {
    return view('New_edit');
});

Route::get('/New_delete', function () {
    return view('New_delete');
});

Route::get('/New_CountriesEdit', function () {
    return view('New_CountriesEdit');
});

Route::get('/New_CountriesDelete', function () {
    return view('New_CountriesDelete');
});

Route::get('/New_AirlineEdit', function () {
    return view('New_AirlineEdit');
});

Route::get('/New_AirlinesDelete', function () {
    return view('New_AirlinesDelete');
});