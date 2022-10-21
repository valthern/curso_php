<?php
include_once "_constantes.php";

// Se abre el fichero para lectura.
$manejadorFichero1=fopen("lecturaSimple.txt","r");

// Se lee la mitad del fichero.
$contenido=fread($manejadorFichero1,14);

// Se muestra la mitad leída.
echo "La primera mitad del fichero es: <b>$contenido</b>".BR;
echo "Nos vamos a desplazar al primer caracter del fichero.".BR;

// Desplazamos el puntero conco caracteres hacia atrás desde la poscicón actual.
fseek($manejadorFichero1,-5,SEEK_CUR);

// Leemos el correspondiente caracter y lo mostramos.
echo "El caracter correspondiente a la posición actual es <b>".fgetc($manejadorFichero1)."</b>".BR;

// Cerramos el fichero.
fclose($manejadorFichero1);
