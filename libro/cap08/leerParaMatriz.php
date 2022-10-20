<?php
include_once "_constantes.php";

// Se lee un fichero a una matriz
$matriz=file("multiLinea.txt");
// Se recorre la matriz, mostrando cada elemento.
foreach ($matriz as $elemento => $contenido) {
    echo "Elemento nº <b>$elemento</b> Contiene: <b>$contenido</b>".BR;
}
