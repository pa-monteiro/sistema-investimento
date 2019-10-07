<?php

Route::get('/', function () {
    return view('welcome');
});

//Routes to user auth
Route::get('login', 'LoginController@homepage');
Route::post('login', ['as' => 'user.login', 'LoginController@store']);