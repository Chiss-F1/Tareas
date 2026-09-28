<html>
    <head><title>Array asociativo - Ejercicio 1</title></head>
<body>
    <?php
    $telefonos = [
        "Ana" => "600123456",
        "Luis" => "611234567",
        "Marta" => "622345678",
        "Carlos" => "633456789"
    ];
    foreach($telefonos as $nombre => $telefono){
        echo "El teléfono de " . $nombre . " es: " . $telefono;
        echo "<br>";
    }
    ?>
</body>
</html>