<?php
define("BR","<br>");
$numeros="cero uno dos tres cuatro cinco seis siete";

$array_numeros=explode(" ",$numeros,-3);

foreach ($array_numeros as $value) {
    echo $value.BR;
}
