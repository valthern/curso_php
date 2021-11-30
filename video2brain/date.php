<?php
include_once "_constantes.php";

echo "Año:" . BR;
echo "Y .- Año completo actual: ";
echo date("Y") . BR;

echo "y .- Dos últimos números del año actual: ";
echo date("y") . BR;

echo "L .- Año actual si es bisiesto (en binario): ";
echo date("L") . BR;

echo BR;
echo "Mes:" . BR;
echo "F .- Nombre del mes (en inglés): ";
echo date("F") . BR;

echo "M .- Tres primeras letras del mes (en inglés): ";
echo date("M") . BR;

echo "m .- Número del mes con ceros: ";
echo date("m") . BR;

echo "n .- Número del mes sin ceros: ";
echo date("n") . BR;

echo BR;
echo "Día:" . BR;
echo "l .- Nombre del día de la semana (en inglés): ";
echo date("l") . BR;

echo "D .- Tres primeras letras del día de la semana (en inglés): ";
echo date("D") . BR;

echo "d .- Día del mes con ceros: ";
echo date("d") . BR;

echo "j .- Día del mes sin ceros: ";
echo date("j") . BR;

echo "N .- Día de la semana en la que nos encontramos: ";
echo date("N") . BR;

echo "w .- Día de la semana en la que nos encontramos: ";
echo date("w") . BR;

echo BR;
echo "Hora:" . BR;
echo "G .- Formato de hora del día de 1 a 24: ";
echo date("G") . BR;

echo "g .- Formato de hora del día de 1 a 12: ";
echo date("g") . BR;

echo "H .- Hora del día con ceros con formato de 24 horas: ";
echo date("H") . BR;

echo "h .- Hora del día con ceros con formato de 12 horas: ";
echo date("h") . BR;

echo "B .- Devuelve la hora en el formato INTERNET SWATCH TIME: ";
echo date("B") . BR;

echo BR;
echo "Minuto:" . BR;
echo "i .- Minutos con ceros: ";
echo date("i") . BR;

echo BR;
echo "Segundo:" . BR;
echo "s .- Segundos con ceros: ";
echo date("s") . BR;

echo BR;
echo "Microsegundo:" . BR;
echo "u .- Microsegundos: ";
echo date("u") . BR;

echo BR;
echo "a .- En el tiempo actual indica si estamos en 'am' o en 'pm' en minúsculas: ";
echo date("a") . BR;

echo "A .- En el tiempo actual indica si estamos en 'am' o en 'pm' en mayúsculas: ";
echo date("A") . BR;

echo "c .- Formato fecha ISO-8601: ";
echo date("c") . BR;

echo "z .- Número de días que han pasado desde que empezó el año (considerando el cero): ";
echo date("z") . BR;

echo "W .- Número de semana del año: ";
echo date("W") . BR;

echo "t .- Los días que tiene el mes actual: ";
echo date("t") . BR;

echo "U .- Segundos que han pasado desde la época Unix: ";
echo date("U") . BR;

echo "e .- Zona horaria donde nos encontramos: ";
echo date("e") . BR;

echo "O .- El desfazamiento de horas respecto al meridiano de Greenwich: ";
echo date("O") . BR;

echo "I .- Si estamos en el DAYLIGHT SERVICE TIME (horaro de verano): ";
echo date("I") . BR;
echo BR;

function dameTiempo()
{
    switch (date("l")) {
        case "Sunday":
            $dia = "Domingo";
            break;
        case "Monday":
            $dia = "Lunes";
            break;
        case "Tuesday":
            $dia = "Martes";
            break;
        case "Wednesday":
            $dia = "Miércoles";
            break;
        case "Thursday":
            $dia = "Jueves";
            break;
        case "Friday":
            $dia = "Viernes";
            break;
        case "Saturday":
            $dia = "Sábado";
            break;
    }

    switch (date("n")) {
        case 1:
            $mes = "Enero";
            break;
        case 2:
            $mes = "Febrero";
            break;
        case 3:
            $mes = "Marzo";
            break;
        case 4:
            $mes = "Abril";
            break;
        case 5:
            $mes = "Mayo";
            break;
        case 6:
            $mes = "Junio";
            break;
        case 7:
            $mes = "Julio";
            break;
        case 8:
            $mes = "Agosto";
            break;
        case 9:
            $mes = "Septiembre";
            break;
        case 10:
            $mes = "Octubre";
            break;
        case 11:
            $mes = "Noviembre";
            break;
        case 12:
            $mes = "Diciembre";
            break;
    }

    echo "Hoy es " . $dia . ", " . date("j") . " de " . $mes . " de " . date("Y");
}

dameTiempo();
