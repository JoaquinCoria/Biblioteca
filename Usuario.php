<?php
    class Usuario{
        private $idUsuario;
        private $nombre;
        private $librosPrestados;
        public function __construct ($idUs, $nom, $librosP)
        {
            $this->idUsuario = $idUs;
            $this->nombre = $nom;
            $this->librosPrestados = $librosP;
        }
        public function __GET($k)
        {
            return $this->$k;
        }
        function verLibrosPrestados()
        {
            return $this->librosPrestados;
        }
        function pedirPrestado($libro)
        {
            if($libro->estaDisponible() == "Disponible"){
                $libro->prestar();
                $this->librosPrestados[] = $libro;
            }
        }
        function devolverLibro($libro)
        {
            foreach($this->verLibrosPrestados as $i->$libroPrestado)
            {
                if($libroPrestado->__GET('isbn') == $libro->__GET('isbn')){
                    $libro->devolverLibro();
                    unset($this->verLibrosPrestados[$i]);
                }
            }
        }  
    }
?>