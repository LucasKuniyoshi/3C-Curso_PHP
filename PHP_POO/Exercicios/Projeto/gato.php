<?php
    class Gato extends Animal{
        function __construc($nome, $raca, $patas, $cor, $peso, $tamanho, $humano){
            parent::__construct($nome, $raca, $patas, $cor, $peso, $tamanho, $humano);
        }

        public function falar(){
            echo "Miau \n";
        }
    }