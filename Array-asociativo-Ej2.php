<html>
    <head><title>Array asociativo - Ejercicio 2</title></head>
<body>
    <?php
    $notas = [
        "Ana" => 8.5,
        "Luis" => 4.2,
        "Marta" => 6.7,
        "Carlos" => 3.8,
        "Laura" => 9.1
    ];
    $aprobados = 0;
    $suspensos = 0;
    $sumaNotas = 0;
    $totalAlumnos = 0;
    foreach($notas as $nombre => $nota){
        $sumaNotas += $nota;
        $totalAlumnos++;
        if($nota >= 5){
            echo "El alumno " . $nombre . " ha aprobado con una nota de: " . $nota;
            echo "<br>";
            $aprobados++;
        } else {
            echo "El alumno " . $nombre . " ha suspendido con una nota de: " . $nota;
            echo "<br>";
            $suspensos++;
        }
    }
    echo "El total de alumnos es: " . $totalAlumnos;
    echo "<br>";
    echo "Total de alumnos aprobados: " . $aprobados;
    echo "<br>";
    echo "Total de alumnos suspensos: " . $suspensos;
    echo "<br>";
    echo "La media de las notas es: " . ($sumaNotas / $totalAlumnos);
    ?>
</body>
</html>