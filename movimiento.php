<?php

include 'conexion.php';

$nc=$_POST["nCu"];
$ns=$_POST["sal"];

$dep = "UPDATE Cuentas Set Saldo = '$ns' WHERE N_Cuenta = $nc";
$update = mysql_query($dep, $conexion);

if($update){
    echo 'Movimiento exitoso';
}else {
    echo "Error al intentar realizar el deposito".  mysql_error();
}
