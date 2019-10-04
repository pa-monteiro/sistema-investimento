<?php

Route::get('/', function () {
    return view('welcome');
});

//Routes to user auth
Route::get('login', 'LoginController@create');