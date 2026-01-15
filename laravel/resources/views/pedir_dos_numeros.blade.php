</head>

<body>
<form method="post" action="visualizar_suma_numeros">

@csrf  <!--{{ csrf_field()}} -->

<label foe="num1">Primer numero:</label>
<input type="number" id="num1" name="num1" min="1" max="200"/>
<label for="num2">Segundo numero:</label>
<input type="number" id="num2"  name="num2" min="1" max="100" />
	<input type="submit" value="mostrar">
	
	<div></div>
</form>

</body>
