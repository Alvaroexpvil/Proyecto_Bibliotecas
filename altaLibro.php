<?php
        require 'libro.php';
        session_start();
        if($_POST){ 
            $libro = new Libro($_POST['isbn'],
                                    $_POST['titulo'],
                                    $_POST['autor'],
                                    $_POST['fecha_publicacion']);
            array_push($_SESSION['libros'],$libro);
        }
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>
</head>
<body>
    <form action="altaLibro.php" method="POST">
        <label>ISBN:</label>
        <input type="text" name="isbn">
    </br>
        <label>Titulo:</label>
        <input type="text" name="titulo">
    </br>
        <label>Autor:</label>
        <input type="text" name="autor">
    </br>
        <label>Fecha:</label>
        <input type="text" name="fecha_publicacion">
    </br>
    </br>
        <input type="submit" value="Guardar Libro">
        <a href="listadoLibros.php">Ver lista</a>
    </form>
</body>
</html>