<?php
// Ejercicio de otro sitio
// https://www.hostinger.mx/tutoriales/conectar-php-mysql#Dos-formas-en-que-un-script-PHP-puede-conectarse-a-MySQL
include_once "_constantes.php";

$servername = "192.168.64.2";
$username = "video2brain";
$password = "video2brain";
$database = "video2brain";

$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("La conexión falló: " . mysqli_connect_error());
}

echo "Conexión exitosa" . BR;
mysqli_close($conexion);
?>