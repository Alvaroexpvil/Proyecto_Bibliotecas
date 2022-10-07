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
    <form action="modificarLibro.php" method="post">
            <label>ISBN:</label>
            <input type="text" name="isbn" id="isbn"> 
        </br>
            <label>Titulo:</label>
            <input type="text" name="titulo" id="titulo">
        </br>
            <label>Autor:</label>
            <input type="text" name="autor">
        </br>
            <label>Fecha:</label>
            <input type="text" name="fecha_publicacion">
        </br>
        </br>
            <input type="submit" value="Modificar">
            
        </form>
</body>
</html>
