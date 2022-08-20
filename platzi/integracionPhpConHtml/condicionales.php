<?php
include_once "_constantes.php";
$estoy_feliz = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>

<body>
    <h2>MALA PRÁCTICA</h2>
    <?php
    if ($estoy_feliz) {
        echo "<span>😀</span>";
    } else {
        echo "<span>😥</span>";
    }
    ?>
    <br>
    <br>

    <h2>PRÁCTICA ACEPTABLE</h2>
    <?php if ($estoy_feliz) { ?>
        <span>😀</span>
    <?php } else { ?>
        <span>😥</span>
    <?php } ?>
    <br>
    <br>

    <h2>MEJOR PRÁCTICA</h2>
    <?php if ($estoy_feliz) : ?>
        <span>😀</span>
    <?php else : ?>
        <span>😥</span>
    <?php endif; ?>
</body>

</html>