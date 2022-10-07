<?php
include_once "_constantes.php";

// Se abre el fichero para lectura
$manejadorFichero1=fopen("lecturaSimple.txt","r");

/* Se leen doce caracteres. El puntero de lectura queda posicionado 
a partir del caracter 13. 
*/
$bloque=fread($manejadorFichero1, 12);
echo "Los doce primeros caracteres del fichero son: <b>$bloque";

/* Se leen otros doce caracateres. El puntero de lectura queda 
posicionado para leer a partir del caracter 25. 
*/
$bloque=fread($manejadorFichero1, 12);
echo "</b>".BR."El siguiente bloque de doce caracteres es: <b>$bloque";

/* Se intenta leer otros doce caracteres, pero se alcanza la marca EOF, 
con lo que se detiene la lectura antes.
*/
$bloque=fread($manejadorFichero1, 12);
echo "</b>".BR."El siguiente bloque es: <b>$bloque";
echo "</b>".BR."Si queremos volver a leer hay que \"rebobinar\".";

/*  Se rebobina el pintero de lectura que vuelve a quedar apuntando
    al primer caracter.
*/
rewind($manejadorFichero1);

/* Se vuelve a leer el primer bloque de caracteres para confirmar que el 
    puntero ha quedado al principio.
*/
$bloque=fread($manejadorFichero1, 12);
echo "</b>".BR."Volvemos a leer el primer bloque de doce caracteres: <b>$bloque";
echo "</b>".BR;

// Se cierra el fichero
fclose($manejadorFichero1);
