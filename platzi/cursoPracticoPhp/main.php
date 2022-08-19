<?php
include_once "_constantes.php";

$palabras = array("sol", "luna", "cielo", "luz", "estrella", "lluvia");

$form = "<form action='analisis.php'>";

for ($i = 0; $i < count($palabras); $i++) {
    "La palabra: ".str_shuffle($palabras[$i])." ".
    "<input type='text' name='palabra".[$i]."'>";
}

$button = "<button type='submit'>Enviar</button>";
$formCierre = "</form>";

print_r($palabrasDesordenadas);

echo "
    <input type='text' name='palabra1'>
    <input type='text' name='palabra2'>
";
