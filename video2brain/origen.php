<?php
echo "Yo soy el contenido original";
// include "incluido.php";
require "incluido.php";

echo "Hola, me veo después del warning";

/**
 * include .- Si el archivo no se encuentra manda un "Warning" 
 * con el mensaje de que no puede encontrar el archivo y sigue con
 * la ejecución del script.
 * require .- Si el archivo no se encuentra manda un "Fatal Error"
 * con el mensaje de que no puede encontrar el archivo y ya no
 * continúa con la ejecución del resto de instrucciones del script.
 */