<?php

/**
 * Se contabiliza el número total de elementos de la matriz "Archivos"
 * , cuyo nombre se corresponde con los campos enviados desde el formulario.
 * Dado que, dicho formulario tiene cuatro campos de archivo pertenecientes 
 * a la misma matriz, ese es el número de elemetos que esa contiene.
 * Eso es independiente de que en los camos se hayan introducido un 
 * valor o no. Los campos existen, aunque no tengan contenido.
 * 
 */
include_once "_constantes.php";

$totalDeArchivos = count($HTTP_POST_FILES["archivos"]["tmp_name"]);
echo "El total de campos de archivos es de: $totalDeArchivos" . BR;
echo "Sin embargo, pude que no todos contengan un archivo.".BR;
echo BR.BR;
/**
 * Se recorren los 4 campos, comprobando su propiedad name. Si no existe
 * quier decir que el campo no tiene contenido, es decir, que no 
 * se ha subido ningún archivo en ese campo.
 */
echo "A continuación se muestra la propiedad \"name\" (nombre)".BR;
for ($contador=0; $contador < $totalDeArchivos; $contador++) { 
    echo "<b>ARCHIVO $contador:</b> ";
    if ($HTTP_POST_FILES["archivos"]["name"]) {
        # code...
    }
}