<?php

$servidor = "sql206.260mb.net";
$usuario = "n260m_14426545";
$contraseña = "drag0n";

$baseDatos = "n260m_14426545_Banco";

$conexion=mysql_connect($servidor,$usuario,$contraseña)or 
die("Error al establecer la conexión: ".mysql_error());

mysql_select_db($baseDatos,$conexion);
