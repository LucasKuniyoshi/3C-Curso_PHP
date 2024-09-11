<?php

    require_once "humano.php";

    class Cachorro extends Animal{
        public Humano $humano;

        function __construc($nome, $raca, $patas, $cor, $peso, $tamanho, $humano){
            parent::__construct();
            $this->humano = $humano;
        }

        public function falar(){
            echo "Au au";
        }
    }