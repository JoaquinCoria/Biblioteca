<?php
     class Libro {
        private $titulo;
        private $autor;
        private  $isbn;
        private $disponible;
        public function __construct ($tit, $aut, $isbn, $dispo)
        {
            $this->titulo = $tit;
            $this->autor = $aut;
            $this->isbn = $isbn;
            $this->disponible = $dispo;
        }
        public function __SET($k)
        {
            
        }
        public function estaDisponible(){
            if ($this->disponible)
            {
                echo "Este libro esta disponble";
            }
            else
            {
                echo "Este libro no esta disponible";
            }
        }
        public function prestar(){
            $this->disponible
        }
        public function devolver(){
            
        }
     }
?>