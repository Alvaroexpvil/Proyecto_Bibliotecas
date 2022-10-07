<?php
    class Socio{
        public $nombre;
        public $apellidos;
        public $dni;
        public $edad;
        public $direccion;

    public function __construct($nombre, $apellidos, $dni, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }
    
    function get_nombre(){
        return $this->nombre;
    }

    function set_nombre(){
        $this->nombre=$nombre;
    }

    function get_apellidos(){
        return $this->apellidos;
    }

    function set_apellidos(){
        $this->apellidos=$apellidos;
    }

    function get_dni(){
        return $this->dni;
    }

    function set_dni(){
        $this->dni=$dni;
    }

    function get_edad(){
        return $this->edad;
    }

    function set_edad(){
        $this->edad=$edad;
    }

    function get_direccion(){
        return $this->direccion;
    }

    function set_direccion(){
        $this->direccion=$direccion;
    }
}
