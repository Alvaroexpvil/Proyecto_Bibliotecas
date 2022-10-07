<?php
    require 'libro.php';
    session_start();

    $isbn = $_POST['isbn'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $fecha_publicacion = $_POST['fecha_publicacion'];

    $libros = $_SESSION['libros'];

    for($i = 0 ; $i < count($libros) ; $i++){
        if($isbn == $libros[$i]->isbn){
            $libros[$i]->isbn = $isbn;
            $libros[$i]->titulo = $titulo;
            $libros[$i]->autor = $autor;
            $libros[$i]->fecha_publicacion = $fecha_publicacion;
            break;
        }
    }
    $_SESSION['libros'] = $libros; 

    header('Location: listadoLibros.php');
?>