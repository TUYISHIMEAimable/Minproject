<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/form/home', function () {
    return view('form/home');
});
Route::get('/form/kigali_provence', function () {
    return view('form/kigali_provence');
});

Route::get('/form/provence_kigali', function () {
    return view('form/provence_kigali');
});

Route::get('/form/register', function () {
    return view('form/register');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
