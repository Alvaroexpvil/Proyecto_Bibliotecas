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
            <th>EDAD</th>
            <th>DIRECCION</th>
            <th colspan="2"><a href="altaSocio.php">NUEVO SOCIO</a></th>
        </tr>

            <?php
            $socios = $_SESSION['socios'];
            foreach ($socios as $key=>$socio) {
                    echo "<tr>";
                    echo "<td>".$socio->get_nombre()."</td>";
                    echo "<td>".$socio->get_apellidos()."</td>";
                    echo "<td>".$socio->get_dni()."</td>";
                    echo "<td>".$socio->get_edad()."</td>";
                    echo "<td>".$socio->get_direccion()."</td>";
                    echo
                    "<form action=modificacionSocio.php method=POST><td>
                    <input type='submit' value='Modificar'></input></td>
                    <input type='hidden' value='.$key.'></input>
                    </form>";
                    echo
                    "<form action=eliminaSocio.php method=POST><td>
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