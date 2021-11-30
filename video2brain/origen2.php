<?php
session_start();
include_once "_constantes.php";

$primeraVariable = "Hola";
$_SESSION['segundaVariable'] = "Adiós";

echo $primeraVariable . BR;

echo "<a href=\"destino.php\">Voy al destino</a>" . BR;
