// Ejercicio de otro sitio
<?php
include_once "pdoconfig.php";
include_once "_constantes.php";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Conectado a: $dbname en $host exitosamente." . BR;
} catch (PDOException $pe) {
    die("No se pudo conectarse a la base de datos $dbname: " . $pe->getMessage());
}
