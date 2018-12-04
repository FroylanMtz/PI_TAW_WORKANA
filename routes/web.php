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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('leadsadd','crmcontroller@addleads');
    //Route::get('leadslist', 'crmcontroller@leadslist');
    //Route::any('leadview/{id}','crmcontroller@show');
    //Route::get('leadedit/{id}','crmcontroller@edit');
});