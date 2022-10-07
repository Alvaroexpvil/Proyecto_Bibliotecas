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
                    echo "<td>$socio->nombre</td>";
                    echo "<td>$socio->apellidos</td>";
                    echo "<td>$socio->dni</td>";
                    echo "<td>$socio->telefono</td>";
                    echo "<td>$socio->direccion</td>";
                    echo "<td><a href=\"modificacionSocio.php?dni=$socio->dni\">Modificar</a></td>";
                    echo "<td><a href=\"eliminarSocio.php?dni=$socio->dni\">Eliminar</a></td>";
                    echo "</tr>";       
            }    
        ?>
        </tbody>
    </table>   
    <a href="index.php">Volver al inicio</a>
</body>
</html>