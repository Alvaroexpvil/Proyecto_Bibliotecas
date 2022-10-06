<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Libro</title>
</head>
<body>

    <?php
    require("libro.php");

        if($_POST){

            $listaLibros  = $_SESSION['libro'];

            $isbn=$_POST['isbn'];
            $titulo=$_POST['titulo'];
            $autor=$_POST['autor'];
            $fecha_publicacion=$_POST['fecha_publicacion'];

            $nuevoLibro = new libro($isbn,$titulo,$autor,$fecha_publicacion);
            array_push($_SESSION['libros'], $listaLibros);
            $_SESSION['libro'] = $listaLibros;
        
        }
   ?>

    <form action="altaLibro.php" method="post">
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
        <input type="submit" value="Añadir Libro">
    </form>
</body>
</html>