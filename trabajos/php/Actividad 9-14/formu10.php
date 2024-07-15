<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $precio1 = $_POST['Precio1'];
    $precio2 = $_POST['Precio2'];
    $precio3 = $_POST['Precio3'];
    $media = ($precio1+$precio2+$precio3)/3;
    echo "<br/>  DATOS RECIBIDOS";
    echo "<br/> Precio producto establecimiento 1: $precio1";
    echo "<br/> Precio producto establecimiento 2: $precio2";
    echo "<br/> Precio producto establecimiento 2: $precio3";
    echo "<h2>El precio medio del producto es de $media <h2>";
?>
</body>
</html>
