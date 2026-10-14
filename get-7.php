<html>
    <head><title>Get y Post - Ejercicio 7</title></head>
<body>
    <form method="get">
        <input name="producto" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <form method="post">
        <input name="nombre" type="text"/>
        <input name="correo" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $producto = $_GET['producto'];
        $mensaje1 = "Producto buscado: $producto";
        echo $mensaje1."<br>";
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = "Nombre: $nombre <br> Correo: $correo";
        echo $mensaje;
    ?>
</body>
</html>