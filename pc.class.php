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
        public function get_peso()
        {
            return $this->peso;
        }
    }

    class Portatili extends Pc 
    {
        
        public $tipologia;
        public $schermo;
        public $colore;

        public function __construct($_tipologia,$_schermo,$_colore)
        {
            parent::__construct('asus','3Kg','999$','40X50','gaming',2021);
            $this->schermo = $_schermo;
            $this->tipologia = $_tipologia;
            $this->colore = $_colore;

        }

        public function setTipologia($tipologia)
        {
            $this->tipologia = $tipologia;
        }

        
    }

    class Fissi extends Pc
    {
        // parent::__construct(1,2,3,4,5,6);

        public $tipologia;
        public $dimensione;
        public $colore;
        
        public function __construct($_tipologia, $_dimensione, $_colore)
        {
            parent::__construct('HP','2Kg',3,4,5,2020);
            $this->tipologia = $_tipologia;
            $this->dimensione = $_dimensione;
            $this->colore = $_colore;
        }

        public function get_tipologia()
        {
            return $this->tipologia;
        }
    }