<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/{provider?}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider?}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('home', 'HomeController@index');
Route::get('logout', 'Auth\LoginController@logout');
Route::post('page', 'Admin\PageFacebookController@store');
Route::put('page/{id}', 'Admin\PageFacebookController@update');

Route::group(['prefix' => 'employer'], function () {
    // social facebook.
    Route::post('post-job', 'Employer\PostController@store');
    Route::delete('delete/{id}', 'Employer\PostController@destroy');
});

Route::group(['prefix' => 'user'], function () {
    Route::post('saved-jobs/{id}', 'User\UserController@saveJob');
});
