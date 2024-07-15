<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h2>Actividad N°9</h2>
    <?php
    $diametro = $_POST['diam'];
    $altura = $_POST ['altu'];
    $radio = $diametro/2;
    $pi = 3.141593;
    $volumen = $pi*$radio*$radio*$altura;
    echo "El volumen del cilindro es de " .$volumen. " metros cubicos";
    ?>
    <h2>Actividad N°10</h2>
</body>
</html>