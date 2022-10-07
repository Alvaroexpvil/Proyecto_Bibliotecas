<?php
    require 'libro.php';
    session_start();

    $isbn = $_GET['isbn'];

    $libros = $_SESSION['libros'];

    for($i = 0 ; $i < count($libros) ; $i++ ){
        if($isbn == $libros[$i]->isbn){
            array_splice($libros,$i,1); 
        }
    }
 
    $_SESSION['libros'] = $libros; 
    header('Location: listadoLibros.php');



?>