<html>
    <head><title>Get y Post - Ejercicio 2</title></head>
<body>
    <form method="get">
        <input name="ciudad" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $ciudad = $_GET['ciudad'];
        $mensaje = "Vives en $ciudad";
        echo $mensaje;
    ?>
</body>
</html>