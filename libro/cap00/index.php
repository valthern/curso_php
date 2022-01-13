<?php
// Comentario de una línea en php
# Otro comentario de una línea
/*
		Comentarios de múltiples líneas
	*/

// Variables (sólo pueden empezar con letras o guión bajo)
define("BR", "<br />");

$nombre = "Omar";
$apellido = "Martínez";
echo $nombre . " " . $apellido . BR;
echo gettype($nombre) . BR;
echo "La variable \$nombre vale $nombreBR";
$nombre = 5.5541;
echo gettype($nombre) . BR;
settype($nombre, "string");
echo $nombre . BR;
echo gettype($nombre);
echo BR;
$saludo = "Hola";
echo 'La variable vale: $saludo' . BR;
echo "La variable vale: $saludo" . BR;
echo "Alguien dice: \"Hola\"" . BR;
echo 'Alguien dice: \'Hola\'' . BR;
echo "Alguien dice: 'Hola'" . BR;
echo 'Alguien dice: "Hola"' . BR;

$cadena = "Esto es una cadena";
$entero = 45;
$flotante = 32.76;
$booleano = true;
$matriz = array("Alfa", "Beta", 68, false);

var_dump($cadena, $entero, $flotante, $booleano, $matriz);
echo BR . BR;

$ciudades = array("Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago");
foreach ($ciudades as $clave => $valor) {
	echo "La ciudad con el índice $clave tiene el nombre $valor." . BR;
}
echo BR;
$ciudades = array("md" => "Madrid", "ba" => "Barcelona", "lo" => "Londres", "ny" => "New York", "la" => "Los Angeles", "ch" => "Chicago");
foreach ($ciudades as $clave => $valor) {
	echo "La ciudad con el índice $clave tiene el nombre $valor." . BR;
}
