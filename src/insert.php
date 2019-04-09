<?php 

session_start();
		
		if(!isset($_SESSION['nombre']))

		header("Location: index.html");
		/*$nombre=$_POST['nombre'];
		$tamano=$_POST['tamano'];
		$login=$_POST['habitat'];
		$login=$_POST['peso'];*/


		$mysqli = new mysqli("localhost", "root", "", "trabajo");

		//$sql = "select * from animales";

		$sql = "insert into animales (Nombre, Tamano, Habitat, Peso) values ('".$_POST['nombre']."', ".$_POST['tamano'].", '".$_POST['habitat']."', ".$_POST['peso'].")";
			
		$rec = mysqli_query($mysqli, $sql);
		/*$rec = mysqli_query($mysqli, $sql);

			if($row = mysqli_fetch_array($rec)) {
				
				$_SESSION['nombre']=$row['Nombre'];
				$_SESSION['rango']=$row['Rango'];
				header("Location: main.php");
				//echo $row['Nombre'];
				//echo $row['Pass'];
			
			}else{
			
				//header("Location: index.html");

			}*/
			header("Location: main.php");
?>
