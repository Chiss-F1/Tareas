<html>
    <head><title>For Each - Ejercicio 3</title></head>
<body>
    <?php
    $notas = [7, 4, 9, 6, 3, 8];
    foreach($notas as $nota){
        if ($nota >= 5){
            echo "La nota es: " . $nota . " - Aprobado";
            echo "<br>";
        }else{
            echo "La nota es: " . $nota . " - Suspenso";
            echo "<br>";
        }
    }
    ?>
</body>
</html>