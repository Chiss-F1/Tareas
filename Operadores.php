<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Operadores lógicos</title>
</head>
<body>
	<?php
    $logueado = true;
    $administrador = false;
    $voluntario = true;
    var_dump($logueado && $administrador);
    var_dump($administrador || $voluntario);
    var_dump(!$logueado);
    var_dump($voluntario xor $administrador);
    ?>
</body>
</html>