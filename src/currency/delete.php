<?php 

session_start();
		if(!isset($_SESSION['nombre']))

		header("Location: index.html");

		//echo $_POST['delete'];
		
		$mysqli = new mysqli("localhost", "root", "", "trabajo");

		
		$sql = "delete from animales where Nombre='".$_POST['delete']."'";
			
		$rec = mysqli_query($mysqli, $sql);
		
			header("Location: main.php");
?>