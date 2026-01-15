<!DOCTYPE html>
<html>
<style>
*{
    color:lightgreen;
    text-align: center;
    font-size: 20px;
}


.cabecera{
    background-color: lightblue;
}

.contenido{
background-color: black;
    color:green;
    text-align: center;
    font-size: 20px;
}

.pie{
    color:lightgreen;
    text-align: center;
    font-size: 20px;
}


</style>
<body>
<div class="cabecera">
    <h3> cabecera </h3>
    @yield("cabecera")
    
    </div>
    
<div class="contenido">
    @yield("contenido")
    
    </div>
    
    
<div class="pie">
    
    @yield("pie")
    copyright I.S.P
    
    </div>

</body>
</html>

