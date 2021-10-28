<?php
    define("BR","<br />");

    $nombre = "Omar";
    $password = "123456";

    if (isset($_GET["enviar_hdn"])) {
        if ($nombre == $_GET["nombre_txt"] && $password == $_GET["password_txt"]) {
            echo "El nombre que ingresaste por GET es ".$_GET["nombre_txt"].BR.
            "El password que ingresaste por GET es ".$_GET["password_txt"].BR.
            "El sexo que seleccionaste es ".$_GET["sexo_rdo"].".";
        } else {
            header("Location: formulario.php?error=si");
        }
        
    } else if (isset($_POST["enviar_hdn"])) {
        if ($nombre == $_POST["nombre_txt"] && $password == $_POST["password_txt"]) {
            echo "El nombre que ingresaste por POST es ".$_POST["nombre_txt"].BR.
            "El password que ingresaste por POST es ".$_POST["password_txt"].BR.
            "El sexo que seleccionaste es ".$_POST["sexo_rdo"].".";
        } else {
            header("Location: formulario.php?error=si");
        }
        
    }
?>