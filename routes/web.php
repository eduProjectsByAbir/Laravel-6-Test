<?php

// Route::get('/', function () {
//     return view('welcome');
// });

// index route
Route::get('/', 'Frontend\FrontendController@index');
// auth routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
