<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/trabajos', 'TrabajosController@mostrar');

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/freelancers', function () {
    return view('freelancers');
});

Route::get('/categorias', function () {
    return view('categorias');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
