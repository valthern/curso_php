<?php
include_once "_constantes.php";

echo "<u>TABLA DE GASTO DE COMBUSTIBLE</u>" . BR;
$formato = "%'_7d * %'_3d = %'_3d" . BR;
echo "L/diarios - Días - Total" . BR;
for ($dia = 1; $dia <= 15; $dia++) {
    printf($formato, 17, $dia, $dia * 17);
}
