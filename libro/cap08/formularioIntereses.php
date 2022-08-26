<?php
require "calculoIntereses.php";
define("BR", "<br />");

echo "El capital solicitado es: " . $_POST["importe"] . " euros." . BR;
echo "El tipo de interés es: " . $_POST["tipo"] . "%." . BR;
echo "El plazo de amortización es de: " . $_POST["plazo"] . " meses." . BR;

$pagoMensual = calulaCuota($_POST["importe"], $_POST["tipo"], $_POST["plazo"]);

echo "<pre>";
var_dump($pagoMensual);
echo "</pre>";

echo "El importe de las cuotas es de: $pagoMensual euros mensuales" . BR;
