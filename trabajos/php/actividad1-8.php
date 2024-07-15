<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Actividad N°3: Crear las siguientes variables y mostralas por pantalla</h1>
    <?php
    $dia = 24;
    $sueldo = 758.43;
    $nombre = "Juan";
    $exite = true;
        echo "<p>El dia es " .$dia. " </p>";
        echo "<p>El suelo es " .$sueldo. "</p>";
        echo "<p>Su nombre es " .$nombre. "</p>";
        echo "<p>El exite es " .$exite. "</p>";
    ?>
    <h1>Actividad N°4: Crear variables con sus datos: nombre y apellido, edad, curso año y división, e imprimirlas en pantallas con un solo echo concatenado.</h1>
    <?php
    $nombre = "Jeremias";
    $apellido = "Hernandez";
    $curso = "cuarto";
    $division = "Primera";
        echo "<p> El alumno es nombrado " .$nombre. ". Se apellida " .$apellido. ". Su grado sera " .$curso. ", " .$division. " Division </p>" 
    ?>
    <h1>Actividad N°5: Generar un valor aleatorio entre 1 y 3 y luego imprimir en castellano el número. </h1>
    <?php
    $num_3 = rand(1,3);
        echo "<p> El numero es " .$num_3. "<br> ";
    if($num_3==1)
        echo "<p>Numero: Uno</p>";
    else if ($num_3==2)
        echo "<p>Numero: Dos</p>";
    else if ($num_3==3)
        echo "<p>Numero: Tres </p>";
    ?>
    <h1>Actividad N°6: Imprimir los números del 1 al 100 con las estructuras de control for y while</h1>
    <?php
        for ($f=1;$f<=100;$f++)
        {
            echo $f;    
            echo " ";
        }
        ?>
        <p>
        <?php
        $f=1;
        while ($f<=100)
        {
            echo $f;
            echo " ";
            $f++;
        }
    ?>
    <h1>Actividad N°7: Imprimir los numero pares del 1 al 100 con la estructura de control for </h1>
    <?php
    for ($par=1;$par<=100;$par++)
        if (($par%2) == 0)
        echo $par;
    else
        echo " "
    ?>
    <h1>Actividad N°8: Imprimir los números impares del 1 al 100 con la estructura de control while.</h1>
    <?php
    $par=0;
    while ($par<=99)
    {
        $par++;
        if (($par%2) == 1 )
            echo $par;
            echo " ";
    }
    ?>
</body>
</html>