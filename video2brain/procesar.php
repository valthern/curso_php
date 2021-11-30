<?php
include "_constantes.php";

echo "Tu nombre es " . $_POST['nombre'] . BR;
echo "Tu apellido es " . $_POST['apellido'] . BR;

echo "Tu nombre es " . $_GET['nombre'] . BR;
echo "Tu apellido es " . $_GET['apellido'] . BR;
echo "Dime si eres admin " . $_GET['administrador'] . BR;
