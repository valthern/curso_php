<?php
include_once "_constantes.php";

// print_r($_REQUEST);

echo BR;

$palabras = array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");

echo BR;

for ($i = 0; $i < count($palabras); $i++) {
    if ($_REQUEST["palabra" . $i] == $palabras[$i]) {
        echo "La palabra ingresada es correcta" . BR;
    } else {
        echo "La palabra no es correcta. La palabra es: " .
            $palabras[$i] . BR;
    }
}
