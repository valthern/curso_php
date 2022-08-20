<?php
    include_once "_constantes.php";
    $nombre = "Omar";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
    <?php echo "<b>Hola mamá, estoy eprendiendo a integrar PHP con HTML</b>" ?>
    <?= BR ?>
    <?= "<i>Esta es otra forma de imprimir texto y etiquetas con PHP</i>" ?>
    <?= BR ?>
    <?= "Hola $nombre" ?>
</body>
</html>