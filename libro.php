<?php
    class Libro{
        public $isbn;
        public $titulo;
        public $autor;
        public $fecha_publicacion;
        
        function __construct($isbn,$titulo,$autor,$fecha_publicacion){
            $this->isbn=$isbn;
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->fecha_publicacion=$fecha_publicacion;   
        }
        
        function get_isbn(){
            return $this->isbn;
        }

        function set_isbn(){
            $this->isbn=$isbn;
        }

        function get_titulo(){
            return $this->titulo;
        }

        function set_titulo(){
            $this->titulo=$titulo;
        }

       
        function get_autor(){
            return $this->autor;
        }

        function set_autor(){
            $this->autor=$autor;
        }

        function get_fecha_publicacion(){
            return $this->fecha_publicacion;
        }

        function set_fecha_publicacion(){
            $this->fecha_publicacion=$fecha_publicacion;
        }
    }
?>
