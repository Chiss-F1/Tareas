<html>
    <head><title>Get y Post - Ejercicio 9</title></head>
<body>
    <form method="post">
        <input name="producto" type="text"/>
        <input name="precio" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        echo "Producto: $producto <br> Precio: $precio €";
        $descuento = $precio * 0.10;
        $precioFinal = $precio - $descuento;
        echo "<br> Descuento: $descuento €";
        echo "<br> Precio final: $precioFinal €";
    ?>
</body>
</html>