<?php
// date_default_timezone_set("America/Mexico_City");
// setlocale(LC_ALL, "MX");
// echo strftime("%A, %x %X");
/* Establecer el localismo al holandés */
setlocale(LC_ALL, 'nld_nld');

/* Muestra: vrijdag 22 december 1978 */
echo strftime("%A %d %B %Y", mktime(0, 0, 0, 12, 22, 1978));

/* Probar diferentes nombres posibles de localismos para el alemán */
$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'deu_deu');
echo "El localismo preferido para el alemán en este sistema es '$loc_de'";