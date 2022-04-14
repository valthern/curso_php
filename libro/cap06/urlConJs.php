<?php
$ocultoTexto = $_POST["ocultoTexto"];
$textoRecuperado = rawurldecode($ocultoTexto);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url con JS</title>
</head>

<body>
    <table width="505" border="1">
        <tr>
            <td width="505">
                <table align="left" width="500" cellpadding="4" border="2">
                    <tr>
                        <th>TEXTO ORIGINAL (YA CODIFICADO)</th>
                    </tr>
                    <tr>
                        <td bgcolor="#C0C0C0">
                            <?php echo $ocultoTexto; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="505">
                <table align="left" width="500" cellpadding="4" border="2">
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