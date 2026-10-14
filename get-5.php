<html>
    <head><title>Get y Post - Ejercicio 5</title></head>
<body>
    <form method="post">
        <input name="nombre" type="text"/>
        <input name="correo" type="text"/>
        <input name="mensaje" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $mensaje = "Nombre: $nombre <br> Correo: $correo <br> Mensaje: $mensaje";
        echo $mensaje;
    ?>
</body>
</html>