<?php
include_once "_constantes.php";

$clave = "HolaCuleros666";

// echo "La clave$clave es: $clave" . BR;
// echo "funcion md5(): " . md5($clave) . BR;
// echo "funcion sha1(): " . sha1($clave) . BR;
// echo "funcion hash(md5): " . hash("md5", $clave) . BR;
// echo "funcion hash(sha1): " . hash("sha1", $clave) . BR;
// echo BR;

foreach (hash_algos() as $algoritmo) {
    echo $algoritmo . " - " . hash($algoritmo, $clave) . BR;
}
