<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('inicio', function(){
	return View::make('views.header');
});
Route::get('formulario', function(){
	return View::make('views.formulario');
});
Route::get('plantilla', function(){
	return View::make('views.plantilla');
});
Route::get('ubicacion', function(){
	return View::make('views.ubicacion');
});
Route::get('nosotros', function(){
	return View::make('views.nosotros');
});
Route::get('index', function(){
	return View::make('views.inicio');
});

Route::get('formulario-emprendedor', function(){
	return View::make('views.formulario-emprendedor');
});
