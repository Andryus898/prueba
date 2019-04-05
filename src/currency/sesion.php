<?php
session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<title>Mi primera sesion</title>
</head>
<body>
	<h1>Mi pagina principal</h1>
	<?php
		if (!isset($_SESSION['contador'])) {
			$_SESSION['contador']=0;
		}else{
			$_SESSION['contador']++;
		}
		echo $_SERVER['PHP_SELF'];
		echo "<p> La sesion actual es: ".session_id()."</p>";
		echo "<a href='".$_SERVER['PHP_SELF']."'>Tienes han visitado ".$_SESSION['contador']." veces</a>";
	
	?>
</body>
</html>