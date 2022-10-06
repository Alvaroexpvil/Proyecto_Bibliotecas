<?php
    session_start();
    require("libro.php");

    $libros= array();
    $_SESSION['libro']=$libros;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
</head>
<body>
    <ul>
        <li><a href="listadoLibros.php">Libros</a></li>
        <li><a href="listadoSocios.php">Socios</a></li>
    </ul>
</body>
</html>