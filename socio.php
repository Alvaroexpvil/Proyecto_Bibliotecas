<?php
    class Socio{
        public $nombre;
        public $apellidos;
        public $dni;
        public $telefono;
        public $direccion;

    public function __construct($nombre, $apellidos, $dni, $telefono, $direccion) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->telefono = $telefono;
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

    function get_telefono(){
        return $this->telefono;
    }

    function set_telefono(){
        $this->telefono=$telefono;
    }

    function get_direccion(){
        return $this->direccion;
    }

    function set_direccion(){
        $this->direccion=$direccion;
    }
}
