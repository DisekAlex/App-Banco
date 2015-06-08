<?php

include "conexion.php";
$id=$_POST["id"];
        
$sql="select * from Cuentas where N_Cuenta = '$id'";
        
$insercion=mysql_query($sql, $conexion);
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
