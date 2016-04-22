<?php
require_once ("conexion.class.php");

$obj1 = new conexion();

$var = "INSERT INTO tabla1 (idTabla, numero1, numero2) VALUES (NULL, '5', '6');";

$obj1->ejecutar_sentencia($var);


?>