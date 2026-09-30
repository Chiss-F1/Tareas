<html>
    <head><title>Array asociativo - Ejercicio 3</title></head>
<body>
    <?php
    $productos = [
        "Teclado" => 15,
        "Ratón" => 7,
        "Monitor" => 4,
        "Webcam" => 12,
        "Auriculares" => 3,
        "Impresora" => 8
    ];
    $totalproductos = 0;
    $stockbajo = 0;
    $productosdiferentes = 0;
    $productosalmacenados = 0;
    $productoconmasunidades = "";
    $productoconmenosunidades = "";
    foreach ($productos as $producto => $unidades) {
        $productosdiferentes++;
        $totalproductos += $unidades;
        if ($unidades < 5) {
            $stockbajo++;
        }
        $productosalmacenados += $unidades;
        if ($unidades > $productos[$productoconmasunidades]) {
            $productoconmasunidades = $producto;
        }
        if ($unidades <= $productos[$productoconmenosunidades]) {
            $productoconmenosunidades = $producto;
        } else if ($productoconmenosunidades == "") {
            $productoconmenosunidades = $producto;
        }
        echo "<h3>Producto: $producto</h3>";
        echo "<p>Unidades: $unidades</p>";
    }
    echo "<h2>Resumen</h2>";
    echo "<p>Total de productos: $productosdiferentes</p>";
    echo "<p>Total de unidades: $totalproductos</p>";
    echo "<p>Productos con stock bajo: $stockbajo</p>";
    echo "<p>Producto con más unidades: $productoconmasunidades</p>";
    echo "<p>Producto con menos unidades: $productoconmenosunidades</p>";
    ?>
</body>
</html>