<?php 
    require 'socio.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Socios</title>
</head>
<body>
    
    <h1>SOCIOS</h1>
    <table border="1">
        <thead><tr><th colspan="7">Listado de Socios</th></tr></thead> 
        <tbody>
        <tr>
            <th>NOMBRE</th>
            <th>APELLIDOS</th>
            <th>DNI</th>
            <th>TELEFONO</th>
            <th>DIRECCION</th>
            <th colspan="2"><a href="altaSocio.php">NUEVO SOCIO</a></th>
        </tr>

            <?php
            $socios = $_SESSION['socios'];
            foreach ($socios as $socio) {
                    echo "<tr>";
                    echo "<td>".$socio->get_nombre()."</td>";
                    echo "<td>".$socio->get_apellidos()."</td>";
                    echo "<td>".$socio->get_dni()."</td>";
                    echo "<td>".$socio->get_telefono()."</td>";
                    echo "<td>".$socio->get_direccion()."</td>";
                    echo "<td><a href=\"modificacionSocio.php?dni=$socio->dni\">Modificar por dni</a></td>";
                    echo "<td><a href=\"eliminarSocio.php?dni=$socio->dni\">Eliminar por dni</a></td>";
                    
                    echo "</tr>";       
            }    
                
        ?>
        </tbody>
    </table>   
    <a href="index1.php">Volver al inicio</a>
</body>
</html>