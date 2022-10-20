<?php
include_once "_constantes.php";

// Se abre el fichero para su lectura.
$manejador=fopen("lecturaSimple.txt","r");
// Mientras no se alcance el final del fichero...
while (!feof($manejador)) {
    // Se lee un caracter.
    $caracter=fgetc($manejador);
    // Se obtiene la posición del puntero.
    $posicion=ftell($manejador);
    // Se comprueba si se ha leído un caracter. Esto se hace para no tratar la marca
    // de final del fichero como un caracter.
    if ($caracter) {
        // Se muestra el caracter y la posición que ocupa.
        echo "El caracter en la posición ";
        echo "<b>$posicion</b> es \"<b></b>";
        echo "$caracter</b>\"".BR;
    }
}

// Se cierra el fichero.
fclose($manejador);
