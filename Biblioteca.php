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
    }
?>