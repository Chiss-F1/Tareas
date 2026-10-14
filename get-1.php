<html>
    <head><title>Get y Post - Ejercicio 1</title></head>
<body>
    <form method="get">
        <input name="nombre" type="text"/>
        <input name="edad" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        $mensaje = "Nombre: $nombre <br> Edad: $edad";
        echo $mensaje;
    ?>
</body>
</html>