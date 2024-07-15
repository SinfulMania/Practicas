<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nom= $_POST['Nombre'];
$texto= $_POST['Comentario'];
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=6º1','root', '');
        echo "conexion ok";
        $conexion->query("INSERT INTO `6º` (`ID`, `Usuario`, `Comentario`) VALUES (NULL, '$nom', '$texto');");
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
//
?>
</body>
</html>