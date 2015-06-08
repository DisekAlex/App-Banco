<?php

include "conexion.php";
$n=$_POST["nom"];
$a=$_POST["ape"];
$nc=$_POST["nCu"];
//$s=$_POST["sal"];

$sql="UPDATE Cuentas SET Nombre='$n', Apellidos='$a' where N_Cuenta='$nc' ";
$insercion=mysql_query($sql, $conexion);

if($insercion){
//  echo "Nombre: ".$nombre."<br>";
//  echo "Apellidos: ".$apellido."<br>";
//  echo "No. Control: ".$no_control."<br>";
//  echo "Edad: ".$edad."<br>";
  echo "Datos modificados correctamente";  
}else{
  echo "Error al registrar los datos: ".mysql_error();
}
mysql_close($conexion);
