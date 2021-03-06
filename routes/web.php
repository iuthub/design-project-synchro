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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/add_guest', function () {
    return view('add_guest');
});

Route::get('/add_staff', function () {
    return view('add_staff');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/book/submit', 'MessagesController@submit');


