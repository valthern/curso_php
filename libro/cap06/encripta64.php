<?php
include_once "_constantes.php";
$cadenaOriginal = "Esto es una cadena.";
echo "La cadena original es: $cadenaOriginal" . BR;

// Se encripta la cadena
$cadenaCodificada = base64_encode($cadenaOriginal);
echo "La cadena codificada es: $cadenaCodificada" . BR;

// Se invierten los caracteres
$cadenaInvertida = strrev($cadenaCodificada);
echo "La cadena codificada revertida es: $cadenaInvertida" . BR;

// Se vuelve a invertir
$cadenaReinvertida = strrev($cadenaInvertida);
// Se desencripta la cadena
$cadenaRecuperada = base64_decode($cadenaReinvertida);
echo BR;
echo "La cadena recuperada es: $cadenaRecuperada" . BR;
