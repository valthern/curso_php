<?php
include_once "_constantes.php";

print_r($_REQUEST);

$palabras = array("sol", "luna", "cielo");

echo BR;

if ($_REQUEST["palabra0"] == $palabras[0]) {
    echo "La palabra ingresada es correcta" . BR;
} else {
    echo "La palabra no es correcta. La palabra es: " . $palabras[0] . BR;
}
if ($_REQUEST["palabra1"] == $palabras[1]) {
    echo "La palabra ingresada es correcta" . BR;
} else {
    echo "La palabra no es correcta. La palabra es: " . $palabras[1] . BR;
}
if ($_REQUEST["palabra2"] == $palabras[2]) {
    echo "La palabra ingresada es correcta" . BR;
} else {
    echo "La palabra no es correcta. La palabra es: " . $palabras[2] . BR;
}
