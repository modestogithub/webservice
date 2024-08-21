<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/students', function (){
	return 'Students List';
});
Route::get('/webservice', function (){
	return 'Hola mundo servicio WEB miguel';
});

