<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aotoprocesada</title>
</head>

<body>
    <?php
    include_once "_constantes.php";
    /*
            Comprobamos si una variable, que sabemos que se genera en el formulario,
            ha sido establecida (declarada y/o asignada) o no. Es la forma de verificar
            si la página acaba de ser cargada (en cuyo caso la variable no existe) o ha
            sido "auto llamada" (en cuyo caso la variable ha sido generada con el
            campo del formulario).
        */
    if (isset($_POST["nombre"])) {
        // Si la variable existe, se muestra en la página.
        echo "El valor del campo \"nombre\" es " . $_POST["nombre"] . BR;
    } else {
        // Si la variable no existe, se muestra el formulario.
    ?>
        <form action="" name="f1" id="f1" method="post">
            Nombre:
            <input type="text" name="nombre" id="nombre">
            <input type="submit" value="Mandar" name="enviar" id="enviar">
        </form>
    <?php
    }
    ?>
</body>

</html>