<?php 

session_start();
		if(!isset($_SESSION['nombre']))

		header("Location: index.html");

		/*echo $_POST['update11'];
		echo $_POST['update12'];
		echo $_POST['update13'];
		echo $_POST['update14'];
		echo $_POST['update21'];
		echo $_POST['update22'];
		echo $_POST['update23'];
		echo $_POST['update24'];*/

		$mysqli = new mysqli("localhost", "root", "", "trabajo");

			$sql = "UPDATE animales SET Nombre='".$_POST['update21']."', Tamano=".$_POST['update22'].", Habitat='".$_POST['update23']."', Peso=".$_POST['update24']." WHERE Nombre='".$_POST['update11']."'";
			
			
		
		$rec = mysqli_query($mysqli, $sql);
		header("Location: main.php");

?>