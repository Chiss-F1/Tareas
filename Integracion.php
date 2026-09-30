<html>
    <head><title>Torneo Videojuegos</title></head>
<body>
    <?php
    $puntosjugador = [
        "Ana" => 850,
        "Carlos" => 420,
        "Marta" => 1250,
        "Luis" => 670,
        "Laura" => 980,
    ];
    $opcion = 3;
    $totaljugadores = 0;
    $jugadoresexpertos = 0;
    $puntuacionmedia = 0;
    $jugadorconmasde500 = 0;
    $nombrejugadorconmaspuntos = "";
    $puntuacionmasalta = 0;
    $puntuacionmasbaja = 0;
    $menos500 = 0;
    $entre500y799 = 0;
    $entre800y999 = 0;
    $mas1000 = 0;
    foreach ($puntosjugador as $jugador => $puntos) {
        echo "<h3>Jugador: $jugador</h3>";
        echo "<p>Puntos: $puntos</p>";
        $totaljugadores++;
        $puntuacionmedia += $puntos;
        if ($puntos > 500) {
            $jugadorconmasde500++;
        }
        if ($puntos > $puntuacionmasalta) {
            $puntuacionmasalta = $puntos;
            $nombrejugadorconmaspuntos = $jugador;
        }
        if ($puntos < 500) {
            $menos500++;
        } elseif ($puntos >= 500 && $puntos < 800) {
            $entre500y799++;
        } elseif ($puntos >= 800 && $puntos < 1000) {
            $entre800y999++;
        } else {
            $mas1000++;
        }
        if ($puntos >= 1000) {
            $jugadoresexpertos++;
        }
        if ($puntos > $puntuacionmasalta) {
            $puntuacionmasalta = $puntos;
            $nombrejugadorconmaspuntos = $jugador;
        }
        if ($puntos < $puntuacionmasbaja || $puntuacionmasbaja === 0) {
            $puntuacionmasbaja = $puntos;
        }
    }
    echo "<h2>Resumen</h2>";
    echo "<p>Total de jugadores → $totaljugadores</p>";
    $puntuacionmedia = $puntuacionmedia / $totaljugadores;
    echo "<p>Media de puntuación → $puntuacionmedia</p>";
    echo "<p>Total de jugadores con más de 500 puntos → $jugadorconmasde500</p>";
    echo "<p>El jugador con puntuación más alta es → $nombrejugadorconmaspuntos con $puntuacionmasalta puntos</p>";
    echo "<p>El jugador con puntuación más baja tiene → $puntuacionmasbaja puntos</p>";
    echo "<p>Total de jugadores expertos (más de 1000 puntos) → $jugadoresexpertos</p>";
    echo "----------------------------------------";
    echo "<p>Menos de 500 puntos →  $menos500</p>";
    echo "<p>Entre 500 y 799 puntos →  $entre500y799</p>";
    echo "<p>Entre 800 y 999 puntos →  $entre800y999</p>";
    echo "<p>Más de 1000 puntos →  $mas1000</p>";
    echo "----------------------------------------";
    echo "<h2>Menú</h2>";
    switch ($opcion) {
        case 1:
            asort($puntosjugador);
            echo "<p>Opción 1 seleccionada</p>";
            echo "<h2>Jugadores ordenados por puntuación (de menor a mayor)</h2>";
            foreach ($puntosjugador as $jugador => $puntos){
                echo "<h3>Jugador: $jugador</h3>";
                echo "<p>Puntos: $puntos</p>";
            }
            break;
        case 2:
            echo "<p>Opción 2 seleccionada</p>";
            echo "<h2>Estadísticas del torneo:</h2>";
            echo "<p>Total de jugadores → $totaljugadores</p>";
            $puntuacionmedia = $puntuacionmedia / $totaljugadores;
            echo "<p>Media de puntuación → $puntuacionmedia</p>";
            echo "<p>Total de jugadores con más de 500 puntos → $jugadorconmasde500</p>";
            echo "<p>El jugador con puntuación más alta es → $nombrejugadorconmaspuntos con $puntuacionmasalta puntos</p>";
            echo "<p>El jugador con puntuación más baja tiene → $puntuacionmasbaja puntos</p>";
            echo "<p>Total de jugadores expertos (más de 1000 puntos) → $jugadoresexpertos</p>";
            break;
        case 3:
            echo "<p>Opción 3 seleccionada</p>";
            echo "Clasificación del torneo";
            arsort($puntosjugador);
            $puesto = 1;
            foreach ($puntosjugador as $jugador => $puntos){
                echo "El jugador que finalizó en el puesto $puesto es: $jugador con $puntos puntos.";
                $puesto++;
            }
            break;
        case 4:
            echo "<p>Opcion 4 seleccionada</p>";
            echo "<p>Salir del menú</p>";
            break;
        default:
            echo "<p>Opción no válida</p>";
    }
    ?>
</body>
</html>