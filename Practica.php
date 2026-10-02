<html>
    <head><title>Estación Meteorológica</title></head>
<body>
    <?php
    $temperaturas = [
        "Santander" => 21,
        "Torrelavega" => 24,
        "Reinosa" => 17,
        "Castro Urdiales" => 22,
        "Potes" => 28,
        "Laredo" => 23,
    ];
    $opcionmenu = 5;
    $totallocalidades = 0;
    $tempertaturatotal = 0;
    $temperaturamedia = 0;
    $localidadesconmasde23 = 0;
    $nombrelocalidadconmastemperatura = "";
    $temperaturamasalta = 0;
    $nombrelocalidadconmenostemperatura = "";
    $temperaturamasbaja = 1000000000;
    $menos18 = 0;
    $entre18y23 = 0;
    $entre23y27 = 0;
    $mas27 = 0;
    foreach ($temperaturas as $localidad => $temperatura) {
        echo "<h3>Localidad: $localidad</h3>";
        echo "<p>Temperatura: $temperatura</p>";
        $totallocalidades++;
        $tempertaturatotal += $temperatura;
        if ($temperatura < 18) {
            $menos18++;
        }else if ($temperatura >= 18 && $temperatura < 23) {
            $entre18y23++;
        }else if ($temperatura >= 23 && $temperatura < 27) {
            $entre23y27++;
            $localidadesconmasde23++;
        }else {
            $mas27++;
            $localidadesconmasde23++;
        }
        if ($temperatura > $temperaturamasalta) {
            $temperaturamasalta = $temperatura;
            $nombrelocalidadconmastemperatura = $localidad;
        }
        if ($temperatura < $temperaturamasbaja) {
            $temperaturamasbaja = $temperatura;
            $nombrelocalidadconmenostemperatura = $localidad;
        }
    }
    echo "----------------------------------------";
    foreach ($temperaturas as $localidad => $temperatura) {
        if($temperatura < 18) {
            echo "<h4>$localidad tiene: Temperatura baja</h4>";
        }
        if($temperatura >= 18 && $temperatura < 23) {
            echo "<h4>$localidad tiene: Temperatura moderada</h4>";
        }
        if($temperatura >= 23 && $temperatura < 27) {
            echo "<h4>$localidad tiene: Temperatura alta</h4>";
        }
        if($temperatura >= 27) {
            echo "<h4>$localidad tiene: Temperatura muy alta</h4>";
        }
    }
    function resumen($totallocalidades, $tempertaturatotal, $localidadesconmasde23, $nombrelocalidadconmastemperatura, $temperaturamasalta, $nombrelocalidadconmenostemperatura, $temperaturamasbaja, $entre18y23, $entre23y27, $mas27) {
        echo "<h2>Resumen</h2>";
        echo "<p>Total de localidades → $totallocalidades</p>";
        $temperaturamedia = $tempertaturatotal / $totallocalidades;
        echo "<p>Total de temperaturas acumuladas → $tempertaturatotal</p>";
        echo "<p>Media de temperatura → $temperaturamedia</p>";
        echo "<p>Total de localidades con más de 23°C → $localidadesconmasde23</p>";
        echo "<p>La localidad con la temperatura más alta es → $nombrelocalidadconmastemperatura con $temperaturamasalta °C</p>";
        echo "<p>La localidad con la temperatura más baja es → $nombrelocalidadconmenostemperatura con $temperaturamasbaja °C</p>";
        echo "<p>Total de localidades con temperatura entre 18°C y 23°C → $entre18y23</p>";
        echo "<p>Total de localidades con temperatura entre 23°C y 27°C → $entre23y27</p>";
        echo "<p>Total de localidades con temperatura mayor a 27°C → $mas27</p>";
    }
    function mostrarLocalidades($temperaturas) {
        foreach ($temperaturas as $localidad => $temperatura){
            echo "<h3>Localidad: $localidad</h3>";
            echo "<p>Temperatura: $temperatura °C</p>";
        }
    }
    echo "----------------------------------------";
    resumen($totallocalidades, $tempertaturatotal, $localidadesconmasde23, $nombrelocalidadconmastemperatura, $temperaturamasalta, $nombrelocalidadconmenostemperatura, $temperaturamasbaja, $entre18y23, $entre23y27, $mas27);
    echo "----------------------------------------";
    echo "<h2>Menú</h2>";
    switch ($opcionmenu) {
        case 1:
            echo "<p>Opción 1 seleccionada</p>";
            echo "<h2>Mostrar todas las localidades y sus temperaturas</h2>";
            mostrarLocalidades($temperaturas);
            break;
        case 2:
            echo "<p>Opción 2 seleccionada</p>";
            echo "<h2>Localidad con la temperatura más alta:</h2>";
            echo "<p>$nombrelocalidadconmastemperatura con $temperaturamasalta °C</p>";
            break;
        case 3:
            echo "<p>Opción 3 seleccionada</p>";
            echo "<h2>Localidad con la temperatura más baja:</h2>";
            echo "<p>$nombrelocalidadconmenostemperatura con $temperaturamasbaja °C</p>";
            break;
        case 4:
            echo "<p>Opcion 4 seleccionada</p>";
            echo "<p>Mostrar estidisticas generales</p>";
            resumen($totallocalidades, $tempertaturatotal, $localidadesconmasde23, $nombrelocalidadconmastemperatura, $temperaturamasalta, $nombrelocalidadconmenostemperatura, $temperaturamasbaja, $entre18y23, $entre23y27, $mas27);
            break;
        case 5:
            echo "<p>Opción 5 seleccionada</p>";
            echo "<h2>Salir.</h2>";
            break;
        default:
            echo "<p>Opción no válida</p>";
            break;
    }
    ?>
</body>
</html>