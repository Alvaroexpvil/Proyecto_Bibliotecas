<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="listadoLibros.php" method="post">
    <label>ISBN:</label>
    <input type="text" name="isbn" id="">
</br>
    <label>Titulo:</label>
    <input type="text" name="titulo" id="">
</br>
    <label>Autor:</label>
    <input type="text" name="autor" id="">
</br>
    <label>Fecha:</label>
    <input type="text" name="fecha_publicacion" id="">
</br>
</br>
    <input type="submit" value="Guardar Modificacion">
    <a href="listadoLibros.php">Volver<a>
    </form>
</body>
</html>
