<?php

include "conexion.php";
$nc=$_POST["nCu"];

$sql="DELETE FROM Cuentas WHERE N_Cuenta = '$nc'";
$consulta = mysql_query($sql,$conexion);

if($sql){
    echo "Eliminacion exitosa"; 
}
else{
    echo "Error en la consulta".  mysql_error();
}
