<html>
    <head><title>Do While - Ejercicio 2</title></head>
<body>
    <?php
    $contraseña = 1234;
    $intento = 1231;
    do{
        echo "Contraseña intentada: " . $intento;
        $intento++;
        echo "<br>";
    }while($intento!=$contraseña);
    echo "¡Contraseña correcta!";
    ?>
</body>
</html>