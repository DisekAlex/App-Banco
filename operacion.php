<?php

include "conexion.php";

$nu = $_POST["nCu"];

$buscar = "SELECT * FROM Cuentas WHERE N_Cuenta = '$nu'";
$insercion=mysql_query($buscar, $conexion);

$datos=array();

if($insercion){
    $i=0;
  while($fila=  mysql_fetch_assoc($insercion)){
      $datos[$i]=$fila;
      $i=$i+1;
  }
   
}else{
  echo "Error al registrar los datos: ".mysql_error();
}


mysql_close($conexion);
echo json_encode($datos);