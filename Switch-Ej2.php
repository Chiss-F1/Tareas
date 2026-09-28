<html>
    <head><title>Switch - Ejercicio 2</title></head>
<body>
    <?php
    $opcion = 2;
    switch ($opcion) {
        case 1:
            echo "Ver usuarios";
            break;
        case 2:
            echo "Ver productos";
            break;
        case 3:
            echo "Ver pedidos";
            break;
        case 4:
            echo "Salir";
            break;
        default:
            echo "Opción no válida";
    }
    ?>
</body>
</html>