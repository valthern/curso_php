<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volver Por Función</title>
</head>

<body>
    <script type="text/javascript">
        function volver() {
            location.href = "volverPorFuncion.html"
        }
    </script>

    <?php
    include_once "_constantes.php";
    $error = false;

    // Se comprueba si el archivo tiene el formato adecuado
    if ($_FILES["fichero"]["type"] != "image/jpeg") {
        echo "El archivo no está en el formato adecuado" . BR;
        $error = true;
    }

    // Se comprueba que tenga un peso adecuado
    if ($_FILES["fichero"]["size"] > 200000) {
        echo "El archivo es demasiado grande" . BR;
        $error = true;
    }

    // Se comprueba que no se hayan producido errores
    if ($_FILES["fichero"]["error"] != 0) {
        echo "Hay un error en el archivo" . BR;
        $error = true;
    }

    // Si se ha producido algún error se vuelve al formulario inicial
    if ($error) {
        echo "<input type='button' name='retorno' id='retorno' value='VOLVER' onClick='javascript:volver()'>";
    } else {
        // Por último se intenta grabar y se comprueba si se graba bien
        $archivoRecibido = $_FILES["fichero"]["tmp_name"];
        $destino = "ficherosSubidos/fotoDelUsuario.jpg";
        if (move_uploaded_file($archivoRecibido, $destino)) {
            echo "Fichero grabado";
        } else {
            echo "El fichero no se ha podido grabar";
        }
    }
    ?>
</body>

</html>