<?php
    session_start();
    if(!isset($_SESSION['libros'])){
        $_SESSION['libros'] = [];
      }

      if(!isset($_SESSION['socios'])){
        $_SESSION['socios'] = [];
      }
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
    <h1>Libreria</h1>
    <ul>
        <li><a href="listadoLibros.php">Libros</a></li>
        <li><a href="listadoSocios.php">Socios</a></li>
    </ul>
</body>
</html>