<?php
$textoOriginal = $_POST["textoOriginal"];
$textoCodificado = rawurlencode($textoOriginal);
$textoRecuperado = rawurldecode($textoCodificado);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codificar URL</title>
</head>

<body>
    <table width="505" border="1">
        <tr>
            <td width="505">
                <table align="left" width="500" cellpadding="4" border="2">
                    <tr>
                        <th>TEXTO ORIGINAL</th>
                    </tr>
                    <tr>
                        <td bgcolor="#C0C0C0">
                            <?php echo $textoOriginal; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="505">
                <table align="left" width="500" cellpadding="4" border="2">
                    <tr>
                        <th>TEXTO CODIFICADO</th>
                    </tr>
                    <tr>
                        <td bgcolor="#C0C0C0">
                            <?php echo $textoCodificado; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="505">
                <table width="500" cellpadding="4" border="2">
                    <tr>
                        <th>TEXTO RECUPERADO</th>
                    </tr>
                    <tr>
                        <td bgcolor="#C0C0C0">
                            <?php echo $textoRecuperado; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>