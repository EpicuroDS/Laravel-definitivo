@extends ("layouts.plantilla1")

</head>

 <style>
        table, td {
            border: 1px solid black;
            padding: 5px;
            border-collapse: collapse;
            margin: 0px auto;
        }
    </style>

<body>
	@section ("cabecera")
		<h4>LISTADO DE ALUMNOS</h4>
	@endsection
	 @section ("contenido")
	 <table border="1">
	    @foreach ($alumnos as $alumno)
	    <tr>
	    	<td>{{ $alumno->NombreAlumno }}</td>
	    	<td>{{ $alumno->Curso }}</td>
	    	<td>{{ $alumno->Nota }}</td>
	    	</tr>
	    @endforeach
	 </table>
	 
	 @endsection
	 @section ("pie")
	 
	  @endsection
</form>

</body>
