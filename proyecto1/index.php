<?php
require_once ("conexion.class.php");

$obj1 = new conexion();

$sql = "SELECT * FROM tabla1 WHERE idTabla=3";

$obj1->ejecutar_sentencia($sql);

$respuesta = $obj1->retornar_array();

echo $respuesta["numero1"];

?>