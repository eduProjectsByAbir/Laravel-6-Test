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

Route::group(['middleware' => 'auth'], function (){
    // home route
    Route::get('/home', 'HomeController@index')->name('home');
    //user route
    Route::prefix('users')->group(function(){
        Route::get('view', 'Backend\UserController@view')->name('users.view');
        Route::get('add', 'Backend\UserController@add')->name('users.add');
        Route::post('store', 'Backend\UserController@store')->name('users.store');
        Route::get('edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::get('delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    });
    // profile route
    Route::prefix('profiles')->group(function(){
        Route::get('view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('store', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
    });
});
