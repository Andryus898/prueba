<?php 

session_start();
		
		$login=$_POST['nombre'];
		$pass=$_POST['pass'];


		$mysqli = new mysqli("localhost", "root", "", "trabajo");

		$sql = "select * from usuarios where Nombre='".$_POST['nombre']."' AND Pass='".$_POST['pass']."'";
			
		$rec = mysqli_query($mysqli, $sql);

			if($row = mysqli_fetch_array($rec)) {
				
				$_SESSION['nombre']=$row['Nombre'];
				$_SESSION['rango']=$row['Rango'];
				header("Location: main.php");
				//echo $row['Nombre'];
				//echo $row['Pass'];
			
			}else{
			
				header("Location: index.html");

			}

?>
