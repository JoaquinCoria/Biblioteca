<?php
    class Biblioteca {
        private string $nombre;
        private array $coleccionLibros;
        private array $usuariosRegistrados;
        public function __construct ($nom, $coleccionLib, $usauriosRes)
        {
            $this->nombre = $nom;
            $this->coleccionLibros = $coleccionLib;
            $this->usuariosRestringidos = $usauriosRes;
        } 
        public string Nombre { get { return nombre; } set { nombre = value; } }
        public string ColeccionLibros { get { return coleccionLibros; } set { coleccionLibros = value; } }
        public float UsuariosRegistrados { get { return usuariosRegistrados; } set { usuariosRegistrados = value; } }
    }
?>