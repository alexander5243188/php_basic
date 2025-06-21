<?php
// Declaración de variables
$curso = "Curso de PHP";
$precio = "100 Bs";
$fecha = "2025-05-29";
$archivado = true;
$inscrito = 10;
$nivel = "Avanzado"; // Básico, Intermedio, Avanzado
$tags = ["PHP", "Programación", "Backend", "Desarrollo Web", "JavaScript", "HTML", "CSS"];
$days = ["Lunes", "Martes", "Jueves", "Viernes",];
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
    <p>Estado del curso: <?php if($archivado){
        echo "<p>Activo</p>";
    } else {
        echo "<p>Archivado</p>";
    }
    ?></p>
    <p><?= $archivado ? "<p>Alumnos inscritos $inscrito</p>" : "<p></p>" ?></p>
    <p><?= $nivel?></p>
    <p><?php 
    if($nivel== "Básico"){
        echo "<p>Recomendado para principitantes en $tags[1], $tags[0] en $tags[2] y $tags[3] </p>";
        } else if( $nivel =="Intermedio"){
            echo "<p>Recomendado para estudiantes con conocimientos basicos de $tags[1] en $tags[0], $tags[4], $tags[5], $tags[6]</p>";             
        }
            else if( $nivel == "Avanzado"){ 
                echo "<p>Curso ideal para estudiantes con conocimientos solidos de programación</p>";
                echo "<p>Dias de las clases</p>";
                    foreach ($days as $day):
                       echo  "<li>$day</li>";
                    endforeach; 
            } 
            
        ?>
    </p>
</body>
</html>