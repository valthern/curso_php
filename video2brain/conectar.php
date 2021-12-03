<?php

$hostname = "localhost";
$username = "video2brain";
$password = "video2brain";
$database = "video2brain";

$conexion = mysqli_connect($hostname,$username,$password,$database);
if (!$conexion) {
    # code...
}

