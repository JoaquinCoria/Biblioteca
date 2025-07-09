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
        public function __GET($k)
        {
            return $this->$k;
        }
        public function estaDisponible(){
            if ($this->disponible)
            {
                return "Disponible";
            }
            else
            {
                return "No disponible";
            }
        }
        public function prestar(){

            if($this->disponible)
            {
                $this->disponible = FALSE;
            }
        }
        public function devolver(){
            if(!$this->disponible)
            {
                $this->disponible = TRUE;
            }
        }
     }
?>