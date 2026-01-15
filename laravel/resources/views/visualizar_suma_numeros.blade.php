@extends ("layouts.plantilla1")
</head>

<body>
@section ("cabecera")
<form method="post" action="suma_numeros">

@csrf  <!--{{ csrf_field()}} -->
@endsection 
@section ("contenido")
la suma es: {{$suma}}
@endsection
@section ("pie")
@endsection
	<div></div>
</form>

</body>
