<html>
    <head><title>Get y Post - Ejercicio 3</title></head>
<body>
    <form method="get">
        <input name="producto" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $producto = $_GET['producto'];
        $mensaje = "Producto buscado: $producto";
        echo $mensaje;
    ?>
</body>
</html>