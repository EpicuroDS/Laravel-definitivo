<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/pedir_dos_numeros","App\Http\Controllers\Controlador1@function_pedir_dos_numeros");

Route::post("/visualizar_suma_numeros","App\Http\Controllers\Controlador1@function_suma_numeros");

//---------------------------------------ELOQUENT

//--------------------Pedir Datos alumnos ELOQUENT


Route::get("/pedir_datos_alumno_eloquent","App\Http\Controllers\Controlador1@function_pedir_datos_alumno_eloquent");

Route::post("/grabar_alumno_eloquent","App\Http\Controllers\Controlador1@function_grabar_alumno_eloquent");


//---------------------------Listado datos alumnos eloquent

Route::get("
/listado_alumnos_eloquent","App\Http\Controllers\Controlador1@function_listado_alumnos_eloquent");
