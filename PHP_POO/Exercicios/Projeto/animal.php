<?php
    class Animal{
        private $nome;
        private $raca;
        private $patas;
        private $cor;
        private $peso;
        private $tamanho;
        private Humano $humano;

        function __construct($nome, $raca, $patas, $cor, $peso, $tamanho, $humano){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->patas = $patas;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho = $tamanho;
            $this->humano = $humano;
        }

        public function getCor(){
            return $this->cor;
        }
        public function getDono(){
            return $this->humano->nome;
        }
        public function getNomePet(){
            return $this->nome;
        }

        public function falar(){
            echo "Estoy a falar \n";
        }
    }