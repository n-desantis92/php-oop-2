<?php
    class Pc
    {
        // attributi
        public $marca;
        protected $peso;
        protected $prezzo;
        protected $dimensioni;
        protected $caratteristiche;
        private $anno;

        // construttore
        public function __construct($_marca, $_peso, $_prezzo, $_dimensioni, $_caratteristiche, $_anno)
        {
            $this->marca = $_marca;
            $this->peso = $_peso;
            $this->prezzo = $_prezzo;
            $this->dimensioni = $_dimensioni;
            $this->caratteristiche = $_caratteristiche;
            $this->anno = $_anno;
        }

        public function get_anno(){
            return $this->anno;
        }
    }

     class Portatili extends Pc 
     {
        
        public $tipologia;
        public $schermo;
        public $colore;

        public function __construct($_tipologia,$_schermo)
        {
            parent::__construct(1,2,3,4,5,6);
            $this->schermo = $_schermo;
            $this->tipologia = $_tipologia;

        }

        public function setTipologia($tipologia)
        {
            $this->tipologia = $tipologia;
        }

        
     }