<?php
    class Usuario {
        private $idUsuario;
        private $nombre;
        private $librosPrestados;
        public function __construct ($nom, $idUs, $librosP)
        {
            $this->nombre = $nom;
            $this->idUsuario = $idUs;
            $this->librosPrestados = $librosP;
        }
        function verLibrosPrestados()
        {
            $this->librosPrestados;
        }
        function pedirPrestado()
        {

        }
        function devolverLibro()
        {

        }  
    }
?>