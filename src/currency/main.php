<?php

	session_start();
	if(!isset($_SESSION['nombre']))

		header("Location: index.html");

?>
<!DOCTYPE html>
<html>
<head>
	<title>ZOO</title>
</head>
<body>
	<h1>Animales Zoo</h1>
	<?php

		$mysqli = new mysqli("localhost", "root", "", "trabajo");

		$sql = "select * from animales";
		//echo "<p>Hola ".$_SESSION['nombre']."</p>";
		$rec = mysqli_query($mysqli, $sql);

echo "<table border='3'>";
echo "<tr>";
	echo "<td><b><u>Nombre</u></b></td>";
	echo "<td><b><u>Tamaño</u></b></td>";
	echo "<td><b><u>Habitat</u></b></td>";
	echo "<td><b><u>Peso</u></b></td>";

echo "</tr>";
//echo "</table>";
//echo "<table border='1'>";
		while($row = mysqli_fetch_array($rec)) {
			echo "<tr>";
			echo "<td>".$row['Nombre']."</td>";
			echo "<td>".$row['Tamano']." metros</td>";
			echo "<td>".$row['Habitat']."</td>";
			echo "<td>".$row['Peso']." kg</td>";

			echo "<td>	<form action='delete.php' method='post'>
							<input type='text' name='delete' value='".$row['Nombre']."'  style='display:none'>
							<input type='submit' value='Delete' onclick='header('Location: delete.php')'>
						</form>
					</td>";
			
			echo "<td>	<form action='update2.php' method='post'>
							<input type='text' name='update11' value='".$row['Nombre']."'  style='display:none'>
							<input type='text' name='update12' value='".$row['Tamano']."'  style='display:none'>
							<input type='text' name='update13' value='".$row['Habitat']."'  style='display:none'>
							<input type='text' name='update14' value='".$row['Peso']."'  style='display:none'>
							<input type='submit' value='Update' formaction='update.php' onclick='header('Location: update.php')'>
							
						</form>
					</td>";			
			
		echo "</tr>";
		}
echo "</table>";
	?><br>
	

	<form action="insert.php" method="post">
			<label>Nombre:</label> <input type="text" name="nombre" required><br>
			<label>Tamaño:</label> <input type="text" name="tamano" required><br>
			<label>Habitat:</label> <input type="text" name="habitat" required><br>
			<label>Peso:</label> <input type="text" name="peso" required><br>
			<input type="submit" value="Añadir a la base de datos">
	</form><br>
	




	
	<a href="logout.php">Cerrar sesion</a>

</body>
</html>