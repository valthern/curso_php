<?php
include_once "../_constantes.php";

$is_float = filter_var("Esto no es un float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
$is_int = filter_var("Esto no es un numero", FILTER_VALIDATE_INT);
$is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);

var_dump($is_float);
echo BR;
var_dump($is_int);
echo BR;
var_dump($is_ip);
