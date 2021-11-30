<?php
include_once "_constantes.php";

$sectores = array("Electricistas", "Fontaneros", "Transportistas", "Aseguradores");
$sector = $_POST["sector"];
echo "La opción elegida es: $sector" . BR;
echo "La profesión correspondiente es: " . $sectores[$sector] . BR;
