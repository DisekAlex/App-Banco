<?php

include "conexion.php";

$n = $_POST["nom"];
$a = $_POST["ape"];
$nc = $_POST["nCu"];
$s = $_POST["sal"];

$sql="INSERT INTO Cuentas (`Nombre`, `Apellidos`, `N_Cuenta`, `Saldo`) VALUES ('$n','$a','$nc','$s')";
$insercion=mysql_query($sql, $conexion);

if($insercion){
  echo "Datos almacenados correctamente";  
}else{
  echo "Error al registrar los datos: ".mysql_error();
}
mysql_close($conexion);
