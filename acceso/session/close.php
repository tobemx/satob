<?php 
include_once 'class.php';
$sesion = new sesion();
$sesion->elimina_variable();
$sesion->termina_sesion();	
header("location: ../");
?>