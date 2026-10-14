<html>
    <head><title>Get y Post - Ejercicio 4</title></head>
<body>
    <form method="post">
        <input name="nombre" type="text"/>
        <input name="apellidos" type="text"/>
        <input name="edad" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $mensaje = "Nombre: $nombre <br> Apellidos: $apellidos <br> Edad: $edad";
        echo $mensaje;
    ?>
</body>
</html>