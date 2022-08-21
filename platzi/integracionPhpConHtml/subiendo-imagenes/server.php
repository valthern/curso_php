<?php

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$basename = $_FILES["image"]["name"];
$image = $_FILES["image"]["tmp_name"];
$ruta_para_subir = "images/$basename";

move_uploaded_file($image, $ruta_para_subir);

echo $basename;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?= $ruta_para_subir ?>" alt="<?= $basename ?>">
</body>
</html>