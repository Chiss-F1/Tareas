<html>
    <head><title>Get y Post - Ejercicio 8</title></head>
<body>
    <form method="post">
        <input name="edad" type="text"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        $edad = $_POST['edad'];
        if ($edad >= 18) {
            $mensaje = "Eres mayor de edad";
            echo $mensaje;
        } else {
            $mensaje = "Eres menor de edad";
            echo $mensaje;
        }
    ?>
</body>
</html>