<?php

Route::get('/', function () {
    return view('index');
});

//Auth
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('dashboard/', function () {
    return view('dashboard')->with('name', Auth::user()->name);
});

Route::get('home', function () {
    return view('dashboard')->with('name', Auth::user()->name);
});


Route::group(['prefix' => 'api'], function () {

    Route::get('project/show', 'ProjectController@show');
    Route::post('project/create', 'ProjectController@createProject');
    Route::get('project/getUsers', 'UsersController@getUsers');

});