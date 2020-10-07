<?php

include("basedatos.php");

if(isset($_POST["enviardatos"]))
{

    //$cedula=$_POST["cedula"];
    $nombre=$_POST["nombre"];
    /*$apellidos=$_POST["apellidos"];
    $edad=$_POST["edad"];
    $direccion=$_POST["casa"];
    $telefono=$_POST["movil"];*/

    $operacion = new Basedatos();

/*$consulta= "INSERT INTO registro(nombre, apellidos,cedula, edad, telefono, direccion) VALUES('$nombre', '$apellidos', '$cedula','$edad', '$direccion', '$telefono')";*/

$consulta= "INSERT INTO registro (nombres) VALUES('$nombre')";

$res=$operacion->alterarBaseDatos($consulta);
  
}



if($res){
    echo("hola");
}else{
    echo("suerte");
}







?>