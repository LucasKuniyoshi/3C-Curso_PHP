<?php
    class Venda{
        private $produto;
        private Humano $humano;

        function __construct($produto, $humano){
            $this->produto = $produto;
            $this->humano = $humano;
        }

        public function getProduto(){
            return $this->produto;
        }
        public function getHumano(){
            return $this->humano->nome;
        }
        public function getvalorProduto(){
            if($this->produto == "Petisco" || $this->produto == "petisco"){
                return 12.50;
            }else if($this->produto == "Coleira" || $this->produto == "coleira"){
                return 32.90;
            }else{
                return 79.89;
            } 
        }
    }