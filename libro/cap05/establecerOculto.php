<?php
include_once "_constantes.php";

echo "El valor del campo oculto es: " . $_POST["ocultoSoltero"] . BR;
// Este forma de la matriz parece ya no estar disponible en la versión 8
// de Php
//echo "El valor del campo oculto es: " . $HTTP_POST_VARS["ocultoSoltero"] . BR;
