<?php
include_once "_constantes.php";
$dia = 30;
$mes = 02;
$ano = 2003;
echo "La fecha $dia/$mes/$ano ";
if (checkdate($mes, $dia, $ano)) {
    echo "Es correcta" . BR;
} else {
    echo "No es correcta" . BR;
}
$dia = 31;
$mes = 3;
$ano = 2006;
echo "la fecha $dia/$mes/$ano ";
if (checkdate($mes, $dia, $ano)) {
    echo "Es correcta" . BR;
} else {
    echo "No es correcta" . BR;
}
