<html>
    <head><title>Get y Post - Ejercicio 10</title></head>
<body>
    <form method="get">
        <input name="precio" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $precio = $_GET['precio'];
        if ($precio < 20){
            echo "Productos que puede comprar: Productos económicos";
        } else if ($precio >= 20 && $precio <= 50){
            echo "Productos que puede comprar: Productos de precio medio";
        } else {
            echo "Productos que puede comprar: Productos de gama alta";
        }
    ?>
</body>
</html>