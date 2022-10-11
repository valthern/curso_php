<?php
include_once "_constantes.php";

$manejadorFichero1=fopen("ficheroHTML.htm","r");
fpassthru($manejadorFichero1);
fclose($manejadorFichero1);
