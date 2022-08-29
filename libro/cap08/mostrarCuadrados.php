<?php
define("salto","<br />\n");
for ($contador=1; $contador <=10; $contador++) { 
    require_once "cuadradoExterno.php";
    calculaCuadrado($contador);
}
