<?php
$fecha=getdate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Fecha</title>
</head>
<body>
    <table border="1" cellpadding="2">
        <tr>
            <th colspan="2">DATOS DE LA FECHA</th>
        </tr>
        <tr>
            <th>CLAVE</th>
            <TH>VALOR</TH>
        </tr>
        <?php
            include_once "_constantes.php";
            foreach ($fecha as $clave => $valor) {
                echo "<tr>\n";
                echo "<td>$clave</td>\n";
                echo "<td>$valor</td>\n";
                echo "</tr>\n";
            }
        ?>
    </table>
</body>
</html>