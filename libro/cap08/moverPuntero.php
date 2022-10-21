<?php
include_once "_constantes.php";

// Se abre el fichero para lectura.
$manejadorFichero1 = fopen("lecturaSimple.txt", "r");

// Se lee la mitad del fichero.
$contenido = fread($manejadorFichero1, 14);

// Se muestra la mitad leida.
echo "La primera mitad del fichero es: <b>$contenido</b>" . BR;
echo "Nos vamos a desplazar al primer caracter del fichero." . BR;

// Desplazamos el puntero al cuarto caracter.
fseek($manejadorFichero1, 3);

// Leemos el cuarto caracter y lo mostramos.
echo "El caracter correspondiente a la posición actual es <b>" . fgetc($manejadorFichero1) . "</b>" . BR;

// Se cierra el fichero.
fclose($manejadorFichero1);
