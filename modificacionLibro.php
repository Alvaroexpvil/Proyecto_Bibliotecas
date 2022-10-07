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
   ?>
    <form action="modificacionLibro.php" method="post">
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
            <input type="submit" value="Modificar">
            <a href="listadoLibros.php">Ver lista de libros</a>
        </form>
</body>
</html>
