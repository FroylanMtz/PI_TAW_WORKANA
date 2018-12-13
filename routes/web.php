<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/trabajos', 'TrabajosController@mostrar');

Route::post('/publicartrabajos', 'TrabajosController@registrarTrabajos');

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/freelancers', 'UserController@mostrarUsuarios');

#MOSTRAR EL PERFIL COMO FREELANCER
Route::get('/freelancers/{id}', 'UserController@mostrarPerfilFreelancer');
#MOSTRAR EL PERFIL COMO CLIENTE
Route::get('/empresa/{id}', 'UserController@mostrarPerfilEmpresa');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::middleware(['auth'])->group(function () {
 
  
    Route::get('/perfil', 'AdminController@mostrarPerfil');
	
    Route::get('/trabajos_freelancer', 'AdminController@mostrarTrabajosFreelancer');
	
    Route::get('/propuestas', 'PropuestasController@mostrarPropuestas');
    Route::post('/mandarPropuesta', 'PropuestasController@registrarPropuesta');
    Route::get('/perfil', 'AdminController@mostrarPerfil');
    Route::get('/configuracion', 'AdminController@mostrarConfiguracion');
	
    Route::patch('/perfil/{usuario}','AdminController@update');
		Route::post('/actualizarFoto',  'AdminController@updateImage');
		Route::post('/configurarCuenta', 	'AdminController@config');

		Route::patch('/terminarProyecto' , 'AdminController@terminarProyecto');
		Route::post('/escribirOpinion', 'AdminController@escribirOpinion');
	
		Route::patch('/elegirPropuesta', 'TrabajosController@elegirPropuesta');
    
		Route::get('/propuesta/{trabajo}','TrabajosController@mostrarTrabajo');
		Route::get('/publicar_trabajo', 'TrabajosController@publicarTrabajo');
  
});