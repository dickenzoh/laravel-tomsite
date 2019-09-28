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
    return view('Index');
});
Route::get('/About Us', function () {
    return view('About Us');
});
Route::get('/Contact Us', function () {
    return view('Contact Us');
});
Route::get('/Dissemination', function () {
    return view('Dissemination');
});
Route::get('/EventList', function () {
    return view('EventList');
});
Route::get('/Funding', function () {
    return view('Funding');
});
Route::get('/Programs', function () {
    return view('Programs');
});
Route::get('/Profile', function () {
    return view('Profile');
});
Route::get('/Methodology', function () {
    return view('Methodology');
});

Route::post('/contact/submit', 'MessagesController@submit');