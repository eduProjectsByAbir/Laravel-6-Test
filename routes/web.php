<?php

// Route::get('/', function () {
//     return view('welcome');
// });

// index route
Route::get('/', 'Frontend\FrontendController@index');
Route::get('about-us', 'Frontend\FrontendController@aboutUs')->name('about.us');
Route::get('contact-us', 'Frontend\FrontendController@contactUs')->name('contact.us');
// auth routes
Auth::routes();
// home route
Route::get('/home', 'HomeController@index')->name('home');
