<?php
include_once "_constantes.php";

foreach ($_FILES["fichero"] as $clave => $valor) {
    echo "Propiedad: $clave --- Valor: $valor" . BR;
}
