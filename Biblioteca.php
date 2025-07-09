<?php
    class Biblioteca {
        private $nombre;
        private $coleccionLibros;
        private $usuariosRegistrados;
        public function __construct ($nom, $coleccionLib, $usauriosRes)
        {
            $this->nombre = $nom;
            $this->coleccionLibros = $coleccionLib;
            $this->usuariosRestringidos = $usauriosRes;
        } 
        
        public function listarLibrosDisponibles(){
           $libros = $this->coleccionLibros;
           foreach($libros as $libro){
            if($libro->estaDisponible()=="Disponible"){
                $librosDisponibles[]=$libro; 
            }
           }
           return $librosDisponibles;
        }
    }
?>