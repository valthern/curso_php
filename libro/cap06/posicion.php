<?php
include_once "_constantes.php";

$cadena = "Esta es la cadena en la que se buscará una cadena";
echo "La cadena es: $cadena" . BR;
//$subcadena = "la cadena";
$subcadena = "XXXX";
$posicion = strpos($cadena, $subcadena);
if ($posicion) {
    echo "La subcadena se inicia dentro de la cadena en la posición: $posicion" . BR;
} else {
    echo "La subcadena no forma parte de la cadena" . BR;
}
