<?php
    class Biblioteca {
        private $nombre;
        private $coleccionLibros;
        private $usuariosRegistrados;
        public function __construct($nom, $coleccionLib, $usauriosReg)
        {
            $this->nombre = $nom;
            $this->coleccionLibros = $coleccionLib;
            $this->usuariosRegistrados = $usauriosReg;
        }
        public function __GET($k)
        {
            return $this->$k;
        }
        public function listarLibrosDisponibles(){
            $libros = $this->coleccionLibros;
            foreach($libros as $libro){
                if($libro->estaDisponible() == "Disponible"){
                    $librosDisponibles[] = $libro;
                }
            }
           return $librosDisponibles;
        }
        public function registrarUsuario($usuario){
            $this->usuariosRegistrados[] = new Usuario((count( $this->usuariosRegistrados)+1), $usuario, NULL);
        }
    }
?>