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
    <title>Modificar Socio</title>
</head>
<body>
    <form action="modificacionSocio.php" method="POST">
        <label>NOMBRE:</label>
        <input type="text" name="nombre">
    </br>
        <label>APELLIDOS:</label>
        <input type="text" name="apellidos">
    </br>
        <label>DNI:</label>
        <input type="text" name="dni">
    </br>
        <label>EDAD:</label>
        <input type="text" name="edad">
    </br>
        <label>DIRECCION:</label>
        <input type="text" name="direccion">
    </br>
    </br>
            <input type="submit" value="Modificar">
            <a href="listadoSocios.php">Ver lista de socios</a>
    </form>
</body>
</html>