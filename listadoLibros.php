<?php 
    session_start();
    require_once "libro.php";
    if($_POST){
       /* $isbn=$_POST['isbn'];
        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];
        $fecha_publicacion=$_POST['fecha_publicacion'];

        $_SESSION['libros'] = array(new libro($isbn,$titulo,$autor,$fecha_publicacion));
        $libro = $_SESSION['libros'];
        array_push($_SESSION['libros'], $libro);
        */
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Libros</title>
</head>
<body>
    <table border="1">
        <thead><tr><th colspan="6">Listado de Libros</th></tr></thead> 
        <tr>
            <th>ISBN</th>
            <th>TITULO</th>
            <th>AUTOR</th>
            <th>FECHA PUBLICACION</th>
            <th colspan="2"><a href="altaLibro.php">NUEVO LIBRO</a></th>
        </tr>

        <tbody>
            <?php
            /*$personas = ["Juan","Fran","Antonio","Alba"];
            foreach($_SESSION['libros'] as $isbn as $titulo as $autor as $fecha_publicacion){ //libros as .... 
                echo "<tr>";
                echo "<td>$isbn</td>";
                echo "<td>$titulo</td>";
                echo "<td>$autor</td>";
                echo "<td>$fecha_publicacion</td>";
                echo "<td><a href=#>Eliminar</a></td>";
                echo "<td><a href=modificacionLibro.php>Modificar</a></td>";
                echo "</tr>";
            }*/
            ?>
        </tbody>
    </table>   
</body>
</html>