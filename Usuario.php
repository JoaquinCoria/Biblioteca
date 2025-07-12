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
        public function verLibrosPrestados()
        {
            return $this->librosPrestados;
        }
        public function pedirPrestado($libro)
        {
            if($libro->estaDisponible() == "Disponible"){
                $libro->prestar();
                $this->librosPrestados[] = $libro;
            }
        }
        public function devolverLibro($libro)
        {
            foreach($this->librosPrestados as $i=>$libroPrestado)
            {
                if($libroPrestado->__GET('isbn') == $libro->__GET('isbn')){
                    $libro->devolver();
                    unset($this->librosPrestados[$i]);
                }
            }
        }  
    }
?>