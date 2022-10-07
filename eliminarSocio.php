<?php
    require 'socio.php';
    session_start();

    $dni = $_GET['dni'];

    $socios = $_SESSION['socios'];

    for($i = 0 ; $i < count($socios) ; $i++ ){
        if($dni == $socios[$i]->dni){
            array_splice($socios,$i,1); 
        }
    }
   
    $_SESSION['socios'] = $socios;
     
    header('Location: listadoSocios.php');