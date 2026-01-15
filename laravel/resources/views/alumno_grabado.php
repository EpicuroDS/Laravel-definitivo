@extends ("layouts.plantilla1")

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    </head>
    <body>
        @section ("cabecera")
            <h4>SALUDO</h4>
        @endsection
        @section ("contenido")
        <h3>ALUMNO {{$nombre}} GRABADO</h3>

            @endsection
            @section ("pie")
            @endsection
    </body>

