<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "css/phpbase.css">
</head>
<body>
    <h1>Temas de Interes</h1>
    <div class="Contenedor1">
    <h2>Advertencia</h2>
    <h3>Los contenidos discutidos en las prosiguientes foros contienen discusiones que pueden contener<br> Contenido grafico, lenguaje maduro, diseño grafico feo. <br>Si usted es perceptible ante algunos de estos elementos listados se le recomienda no entrar. <h4>HA SIDO ADVERTIDO</h4></h3>
    </div>
    <div class="Contenedor2">
<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=foro-et20','root', '');
    $busca = $conexion->query ("SELECT * FROM `temas`");
echo "<br>";
        foreach ($busca as $imagen)
        {
            $Tema= $imagen['Tema']. '.php'; 
            echo '<a href="' . $Tema . '" class="caja">';
            echo $imagen['Tema'].'</a>';
        }
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
?>
</div>
</body>
</html>