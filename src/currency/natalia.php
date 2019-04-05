<?php

$nombre = "";
$numero = "";
$correo = "";
$enblanco;

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	if (empty($_POST["nombre"])){
		$nombre = "introduzca su nombre";
	}else{
		$nombre = test_input($_POST["nombre"]);
	}

	if (empty($_POST["correo"])){
		$correo = "introduzca su correo";
	}else{
		$correo = test_input($_POST["correo"]);
	}




}

?>