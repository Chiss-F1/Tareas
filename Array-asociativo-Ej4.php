<html>
    <head><title>Array asociativo - Ejercicio 4</title></head>
<body>
    <?php
    $ventascomercial = [
        "Ana" => 3250,
        "Luis" => 1850,
        "Marta" => 4720,
        "Carlos" => 2900,
        "Laura" => 5100,
        "Pedro" => 2150
    ];
    $totalventas = 0;
    $mediaporcomercial = 0;
    $numerocomerciales = 0;
    $comercialconventasmayores3000 = 0;
    $comercialquemasvendio = "";
    $comercialquemenosvendio = "";
    $menos2000 = 0;
    $entre2000y3000 = 0;
    $entre3000y4500 = 0;
    $mas4500 = 0;
    foreach ($ventascomercial as $comercial => $ventas) {
        echo "<h3>Comercial: $comercial</h3>";
        echo "<p>Ventas: $ventas</p>";
        $numerocomerciales++;
        $totalventas += $ventas;
        if ($ventas > 3000) {
            $comercialconventasmayores3000++;
        }
        if ($ventas > $ventascomercial[$comercialquemasvendio]) {
            $comercialquemasvendio = $comercial;
        }
        if ($ventas <= $ventascomercial[$comercialquemenosvendio]) {
            $comercialquemenosvendio = $comercial;
        } else if ($comercialquemenosvendio == "") {
            $comercialquemenosvendio = $comercial;
        }
        if ($ventas < 2000) {
            $menos2000++;
        } elseif ($ventas >= 2000 && $ventas <= 3000) {
            $entre2000y3000++;
        } elseif ($ventas > 3000 && $ventas <= 4500) {
            $entre3000y4500++;
        } else {
            $mas4500++;
        }
    }
    echo "<h2>Resumen</h2>";
    echo "<p>Total de ventas: $totalventas</p>";
    $mediaporcomercial = $totalventas / $numerocomerciales;
    echo "<p>Media de ventas por comercial: $mediaporcomercial</p>";
    echo "<p>Total de comerciales: $numerocomerciales</p>";
    echo "<p>Comerciales con ventas mayores a 3000: $comercialconventasmayores3000</p>";
    echo "<p>Comercial con más ventas: $comercialquemasvendio</p>";
    echo "<p>Comercial con menos ventas: $comercialquemenosvendio</p>";
    echo "----------------------------------------";
    echo "<p>Menos de 2000 € →  $menos2000</p>";
    echo "<p>Entre 2000 y 2999 € →  $entre2000y3000</p>";
    echo "<p>Entre 3000 y 4499 € →  $entre3000y4500</p>";
    echo "<p>Más de 4500 € →  $mas4500</p>";
    ?>
</body>
</html>