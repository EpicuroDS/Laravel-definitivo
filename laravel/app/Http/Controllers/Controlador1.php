<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;


class Controlador1 extends Controller
{
    public function function_pedir_dos_numeros(){
    
    return view('pedir_dos_numeros');   }
    
    public function function_suma_numeros(Request $request){
    
    $n1 = $request -> num1;
    $n2 = $request -> num2;
    $suma = $n1+$n2;
    return view ("visualizar_suma_numeros")-> with('suma',$suma);
    }





public function function_pedir_datos_alumno()
{
    return view ("pedir_datos_alumno");
}

public function function_pedir_datos_alumno_eloquent()
{
    return view ("eloquent.pedir_datos_alumno_eloquent");
}

public function function_grabar_alumno(Request $request){

$nombre = $request ->nombre;
$curso = $request ->curso;
$nota = $request ->nota;
$query = \DB::table('alumnos')->insert(['NombreAlumno' => $nombre, 'curso' => $curso, 'nota' => $nota]);
    return view ("alumno_grabado") -> with('nombre', $nombre);
}

public function funcion_listar_alumno(Request $request){
    	$listado=\DB::table('alumnos')->get();
    	return view("listado_alumnos")->with('listado', $listado);
    }

public function function_grabar_alumno_eloquent(Request $request){
 if ($request->nombre != NULL){
 	$alumno=new Alumno;
 	$nombre = $request->nombre;
 	$nota = $request->nota;
 	$curso = $request->curso;
 	
    $alumno->NombreAlumno= $nombre;
    $alumno->curso= $curso;
    $alumno->nota= $nota;
    $alumno->save();
    
  }
   return view ("alumno_grabado")->with('nombre', $nombre);
  }
  public function function_listado_alumnos_eloquent(){
  	$alumnos = Alumno::all();
  	
  	return view('listado_alumnos',['alumnos' => $alumnos]);
  }
}



