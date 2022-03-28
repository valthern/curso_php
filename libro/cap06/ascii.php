<?php
include_once "_constantes.php";

$caracter = 'A';
$valor = 97;
echo "El carácter '$caracter' (mayúscula) tiene el código ASCII: " . ord($caracter) . BR;
echo "El valor $valor corresponde al caracter: " . chr($valor) . BR;
