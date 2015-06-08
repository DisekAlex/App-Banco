<?php

include 'conexion.php';

$ver = "SELECT * FROM Cuentas";
$selec = mysql_query($ver,$conexion);

$res = array();
if($selec){
    $i=0;
  while($fila=  mysql_fetch_assoc($selec)){
      $res[$i]=$fila;
      $i=$i+1;
  }
   
}else{
  echo "Error al registrar los datos: ".mysql_error();
}
mysql_close($conexion);
echo json_encode($res);