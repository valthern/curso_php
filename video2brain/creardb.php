<?php
include_once "_constantes.php";

$servername = "192.168.64.2";
$username = "video2brain";
$password = "video2brain";
$database = "video2brain";

$conexion = mysqli_connect($servername, $username, $password, $database);

if (!$conexion) {
    die("La conexión falló: " . mysqli_connect_error());
}

if (mysqli_query(/* QUIEN SABE QUÉ MADRES VA AQUÍ */)) {
    # code...
} else {
    # code...
}


echo "Conexión exitosa" . BR;
mysqli_close($conexion);
?>