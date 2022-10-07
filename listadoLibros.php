<?php 
    require 'libro.php';
    session_start();
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
    <h1>LIBROS</h1>
    <table border="1">
        <thead><tr><th colspan="6">Listado de Libros</th></tr></thead> 
        <tbody>
        <tr>
            <th>ISBN</th>
            <th>TITULO</th>
            <th>AUTOR</th>
            <th>FECHA PUBLICACION</th>
            <th colspan="2"><a href="altaLibro.php">NUEVO LIBRO</a></th>
        </tr>
            <?php
            $libros = $_SESSION['libros'];
            foreach ($libros as $key=>$libro) {
                    echo "<tr>";
                    echo "<td>".$libro->get_isbn()."</td>";
                    echo "<td>".$libro->get_titulo()."</td>";
                    echo "<td>".$libro->get_autor()."</td>";
                    echo "<td>".$libro->get_fecha_publicacion()."</td>";
                    echo
                    "<form action=modificacionLibro.php method=POST><td>
                    <input type='submit' value='Modificar'></input></td>
                    <input type='hidden' value='.$key.'></input>
                    </form>";
                    echo
                    "<form action=eliminaLibro.php method=POST><td>
                    <input type='submit' value='Eliminar'></input></td>
                    <input type='hidden' value='.$key.'></input>
                    </form>";
                    echo "</tr>";       
            }         
        ?>
        </tbody>
    </table>   
    <a href="index1.php">Volver al inicio</a>
</body>
</html>