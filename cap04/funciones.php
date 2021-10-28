<?php
define("BR", "<br />");

echo "--- Funciones para argumentos" . BR;
function comprobarArgumentos()
{
    // Uso de func_num_args().
    $numeroDeArgumentos = func_num_args();
    echo "<u>Uso de func_num_args().</u>" . BR;
    echo "El numero de argumentos es $numeroDeArgumentos" . BR . BR;

    // Uso de func_get_arg().
    echo "<u>Uso de func_get_arg().</u>" . BR;
    for ($contador = 0; $contador < $numeroDeArgumentos; $contador++) {
        $argumento = func_get_arg($contador);
        echo "El argumento $contador tiene el valor $argumento" . BR;
    }
    echo BR;

    //Uso de fun_get_args().
    echo "<u>Uso de func_get_args().</u>" . BR;
    $matrizDeArgumentos = func_get_args();
    for ($contador = 0; $contador < $numeroDeArgumentos; $contador++) {
        $argumento = $matrizDeArgumentos[$contador];
        echo "El argumento $contador tiene el valor $argumento" . BR;
    }
    echo BR;
}

$variable1 = 8;
$variable2 = "HOLA";
$variable3 = "ADIÓS";

comprobarArgumentos($variable1, $variable2, $variable3);

echo "--- Argumentos por valor o por referencia" . BR;
// Paso por referencia agregando un "&" al parámetro.
function cuadrado(&$numero)
{
    $numero *= $numero;
    echo "En la función el número se eleva al cuadrado, obteniendo el resultado: $numero" . BR;
}

$numero = 3;
echo "El número, antes de invocar la función vale: $numero" . BR;
cuadrado($numero);
echo "El numero, después de la invocar la función vale: $numero" . BR;

echo BR;

function cuadrado2($numero)
{
    $cuadrado = $numero * $numero;
    echo "El cuadrado de $numero es $cuadrado." . BR;
}

// Variables locales no accesibles en el scope del script.
echo "--- Variables locales no accesibles en el scope del script." . BR;
$numero = 3;
cuadrado2($numero);
echo "La variable \$numero vale $numero y es de tipo " . gettype($numero) . BR;
echo "La variable \$cuadrado vale $cuadrado y es de tipo " . gettype($cuadrado) . BR . BR;

// Variables globales no accesibles dentro de la función.
echo "--- Variables globales no accesibles dentro de la función." . BR;
function cuadrado3($valor)
{
    $cuadrado = $valor * $valor;
    echo "El cuadrado de $valor es $cuadrado" . BR;
    echo "La variable \$numero dentro de la función vale $numero y es de tipo " . gettype($numero) . BR;
}
$numero = 3;
cuadrado3($numero);
echo "La variable \$numero fuera de la función  vale $numero y es de tipo " . gettype($numero) . BR;
echo "La variable \$cuadrado fuera de la función vale $cuadrado y es de tipo " . gettype($cuadrado) . BR;
