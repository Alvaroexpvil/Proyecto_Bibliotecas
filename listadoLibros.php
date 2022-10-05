<?php 
    require "libro.php";

    session_start();
    if($_POST){
        $isbn=$_POST['isbn'];
        $titulo=$_POST['titulo'];
        $autor=$_POST['autor'];
        $fecha_publicacion=$_POST['fecha_publicacion'];
    
        array libros($_SESSION['libros']);
    
        $nuevoLibro = new libro($isbn,$titulo,$autor,$fecha_publicacion);
        $libros = $_SESSION['libros'];

    }
    
    /*
    Hacer bucle while dentro del body en una etiqueta php 
    echo "<tr>" pintar Fila al añadir un nuevo libro
    echo "<td>$isbn</td>"
    
    */

    /*
    index.html -> href -> listadoLIbros.php busca datos sesion , pinto una tabla que tendra boton modificar y eliminar

    
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead><tr><th colspan="6">Listado de Libros</th></tr></thead>
        <tbody>
        <tr>
            <th>ISBN</th>
            <th>TITULO</th>
            <th>AUTOR</th>
            <th>FECHA PUBLICACION</th>
        </tr>
            <td><input type="submit" value="Eliminar"></td>
            <td><input type="submit" value="Modificar"></td>
        </tr>
    </tbody>
    </table>
    <a href="altaLibro.php">nuevo libro</a>
    <a href="modificacionLIbro.php">modificar libro</a>
    
</body>
</html>