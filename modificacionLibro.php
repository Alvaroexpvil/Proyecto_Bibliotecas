<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Libro</title>
</head>
<body>
    <?php
    require 'libro.php';
    session_start(); 

    $isbn = $_GET['isbn'];
    $marcador;
    $libros = $_SESSION['libros'];

    foreach($libros as $libro){
        if($isbn == $libro->isbn){
            $marcador = $libro;
            break;
        }
    }
    //
    // guardo en la variable marcador el Libro cuyo isbn coincida con el que recibo por get
   ?>
    <form action="modificarLibro.php" method="POST">
            <label>ISBN:</label>
            <input type="text" name="isbn" value="<?php echo $marcador->isbn?>"> 
        </br>
            <label>Titulo:</label>
            <input type="text" name="titulo" value="<?php echo $marcador->titulo?>">
        </br>
            <label>Autor:</label>
            <input type="text" name="autor" value="<?php echo $marcador->autor?>">
        </br>
            <label>Fecha:</label>
            <input type="text" name="fecha_publicacion" value="<?php echo $marcador->fecha_publicacion?>">
        </br>
        </br>
            <input type="submit" value="Modificar">
            
        </form>
</body>
</html>
