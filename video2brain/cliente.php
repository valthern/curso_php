<?php
include "_constantes.php";

$tuip = $_SERVER['REMOTE_ADDR'];
echo "Tu ip es: $tuip" . BR;

$tunavegador = $_SERVER['HTTP_USER_AGENT'];
echo "Y tu sistema opertivo y navegador es: $tunavegador" . BR;
