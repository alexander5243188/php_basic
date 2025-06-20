<?php
// Declaración de variables
$curso = "Curso de PHP";
$precio = "100 Bs";
$fecha = "2025-05-29";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $curso?></title>
</head>
<body>
    <p>Introducción al <?= $curso?></p>
    <p>Tiene un precio de <?= $precio?> y el lanzamiento es <?= $fecha?> </p>
</body>
</html>