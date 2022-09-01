<?php
include_once "_constantes.php";
date_default_timezone_set("America/Mexico_City");

$fecha_us = date("l d F Y");
$fecha_mx = date("d/m/Y");
echo $fecha_us . BR;
echo $fecha_mx . BR;

$hora_12 = date("h:i:a");
$hora_24 = date("H:i");
echo $hora_12 . BR;
echo $hora_24 . BR;

function fecha_español_larga()
{
    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_año = date("Y");

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Míércoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sábado",
        "Sunday" => "Domingo"
    ];

    $meses_año = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    $fecha_final = $dia_semana[date("l")] . ", " . $fecha_dia . " de " . $meses_año[$fecha_mes] . " de " . $fecha_año;

    return $fecha_final;
}
echo BR;
echo fecha_español_larga() . BR;
echo BR;
function fecha_español_corta($fecha = "")
{
    if ($fecha == "") {
        $fecha = date("d/m/Y");
    } else {
        $fecha = date("d/m/Y", strtotime($fecha));
    }

    $fecha = explode("/", $fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_año = $fecha[2];

    $meses_año = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    $fecha_final = $fecha_dia . " de " . $meses_año[$fecha_mes] . " de " . $fecha_año;

    return $fecha_final;
}
