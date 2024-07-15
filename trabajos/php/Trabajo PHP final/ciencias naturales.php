<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "css\phpdiscusion3.css">
</head>
<body">
    <h1>Ciencias Naturales</h1>
    <div class="caja3">
    <form action="Ciencias Naturales.php" method="post">
    <input type="text" class="cajanom" name="nombre" placeholder="Nombre" required>
    <textarea name="texto" id="texto" cols="30" rows="10" placeholder="gracias por compartir su comentario" required></textarea>
    <input type="submit" class="enviar">
</div>
</form>
<?php
try {
    $conexion= new PDO('mysql:host=localhost;dbname=foro-et20','root','');
if(!empty($_POST)){
    $nombre = $_POST['nombre'];
    $texto = $_POST['texto'];
    $fecha = date("y/m/d");
    $conexion->query("INSERT INTO `tabla2` (`ID`, `Nickname`, `Comentario`, `Fecha`) VALUES (NULL, '$nombre', '$texto', '$fecha');");
    }
     $busca = $conexion->query("SELECT * FROM `tabla2`");
     foreach ($busca as $imagen)
     {
        echo "<p>Nombre:".$imagen['Nickname']."";
        echo "<br><br>Comentario:".$imagen['Comentario']."";
        echo "<br><br>Fecha: ".$imagen['Fecha']."</p>";
    }

     } catch (PDOException $e) {
     echo 'Falló la conexión: ' . $e->getMessage();
 }
?>
</body>
</html>