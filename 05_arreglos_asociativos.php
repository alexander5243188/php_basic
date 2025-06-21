<?php
// Declaración de variables
$curso = [
    'titulo'=>"Curso de PHP",
    'precio'=>"100 Bs",
    'fecha'=>"2025-05-29",
    'archivado'=>true,
    'inscrito'=>"10",
    'nivel'=> "Avanzado", // Básico, Intermedio, Avanzado
    'tags' => ["PHP", "Programación", "Backend", "Desarrollo Web", "JavaScript", "HTML", "CSS"],
    'days' => ["Lunes", "Martes", "Jueves", "Viernes"]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $curso['titulo']?></title>
</head>
<body>
    <p>Introducción al <?= $curso['titulo']?></p>
    <p>Tiene un precio de <?= $curso['precio']?> y el lanzamiento es <?= $curso['fecha']?> </p>
    <p>Estado del curso: <?php if($curso['archivado']){
        echo "<span>Activo</span>";
    } else {
        echo "<span>Archivado</span>";
    }
    ?></p>
   
    <?= $curso['archivado'] ? "<p>Alumnos inscritos {$curso['inscrito']}</p>" : "" ?>


    <p><?= $curso['nivel']?></p>
    <p><?php 
    if($curso['nivel']== "Básico"){
        echo "<p>Recomendado para principitantes en {$curso['tags'][1]}, {$curso['tags'][0]} en {$curso['tags'][2]} y {$curso['tags'][3]} </p>";
        } else if( $curso['nivel'] =="Intermedio"){
            echo "<p>Recomendado para estudiantes con conocimientos basicos de {$curso['tags'][1]} en {$curso['tags'][0]}, {$curso['tags'][4]}, {$curso['tags'][5]}, {$curso['tags'][6]}</p>";                         
        }
            else if( $curso['nivel'] == "Avanzado"){ 
                echo "<p>Curso ideal para estudiantes con conocimientos solidos de programación</p>";
                echo "<p>Dias de las clases</p>";
                    foreach ($curso['days'] as $day):
                       echo  "<li>$day</li>";
                    endforeach; 
            } 
            
        ?>
    </p>
</body>
</html>