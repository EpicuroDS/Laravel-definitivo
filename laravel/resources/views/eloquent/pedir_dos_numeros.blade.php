@extends ("layouts.plantilla1")

<body>
@section ("cabecera")
<form method="post" action="grabar_alumno_eloquent">

 @csrf <!-- {{csrf_field() }} -->
@endsection
@section ("contenido")
 <label for="nombre">Nombre:</label>
 
 <input type="text" id="nombre" name="nombre" min="1" max="30" >
 
 
 <label for="nota">Nota:</label>
 
 <input type="number" id="nota" name="nota" min="1" max="10" >
     
     
 <label for="curso">Curso:</label>
 
 <input type="text" id="curso" name="curso">
 
 
     <input type="submit" value="Enviar">
@endsection
@section ("pie")
@endsection
</form>
</body>

