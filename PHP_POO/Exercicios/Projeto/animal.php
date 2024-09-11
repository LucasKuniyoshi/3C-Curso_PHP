<?php
    class Animal{
        public $nome;
        public $raca;
        public $patas;
        public $cor;
        public $peso;
        public $tamanho;

        function __construct($nome, $raca, $patas, $cor, $peso, $tamanho){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->patas = $patas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho = $tamanho;
        }

        public function falar(){
            echo "Estoy a falar";
        }
    }