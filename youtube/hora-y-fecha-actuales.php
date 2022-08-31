<?php
include_once "_constantes.php";
date_default_timezone_set("America/Mexico_City");

$fecha_us= date("l d F Y");
$fecha_mx= date("d/m/Y");
echo $fecha_us.BR;
echo $fecha_mx.BR;

$hora_12=date("h:i:a");
$hora_24=date("H:i");
echo $hora_12.BR;
echo $hora_24.BR;

function 