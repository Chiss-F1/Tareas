<html>
    <head><title>Get y Post - Ejercicio 6</title></head>
<body>
    <form method="get">
        <select id="categoria" name="categoria">
        <option value="Ordenadores">Ordenadores</option>
        <option value="Perifericos">Periféricos</option>
        <option value="Moviles">Móviles</option>
        <option value="Componentes">Componentes</option>
        </select>
        <input type="submit" value="Seleccionar"/>
    </form>
    <?php
        $categoria = $_GET['categoria'];
        $mensaje = "Categoría seleccionada: $categoria";
        echo $mensaje;
    ?>
</body>
</html>