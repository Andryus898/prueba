<?php
$enlace=mysqli_connect("localhost","newralers","aA4404","");

if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>