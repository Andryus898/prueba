<?php 

session_start();
		if(!isset($_SESSION['nombre']))

		header("Location: index.html");

		/*echo $_POST['update11'];
		echo $_POST['update12'];
		echo $_POST['update13'];
		echo $_POST['update14'];*/
		
		
		/*$mysqli = new mysqli("localhost", "root", "", "trabajo");

		
		$sql = "delete from animales where Nombre='".$_POST['delete']."'";
			
		$rec = mysqli_query($mysqli, $sql);
		
			header("Location: main.php");*/


?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<h1>Editar</h1>
	<table border="3">

		<tr>
			<td><b><u>Campo Editado</u></b></td>
			<?php
						echo "<form action='update2.php' method='post'>
							<input type='text' name='update11' value='".$_POST['update11']."'  style='display:none'>
							<input type='text' name='update12' value='".$_POST['update12']."'  style='display:none'>
							<input type='text' name='update13' value='".$_POST['update13']."'  style='display:none'>
							<input type='text' name='update14' value='".$_POST['update14']."'  style='display:none'>
							<td><input type='text' value='".$_POST['update11']."' name='update21'></td>
							<td><input type='text' value='".$_POST['update12']."' name='update22'></td>
							<td><input type='text' value='".$_POST['update13']."' name='update23'></td>
							<td><input type='text' value='".$_POST['update14']."' name='update24'></td>
							<td><input type='submit' value='Editar' onclick='header('Location: update2.php')'></td>
						</form>";
			?>
			
		</tr>
	</table>
</body>
</html>