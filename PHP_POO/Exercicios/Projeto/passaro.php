<?php
    class Passaro extends Animal{
    function __construc($nome, $raca, $patas, $cor, $peso, $tamanho){
        parent::__construct($nome, $raca, $patas, $cor, $peso, $tamanho);
    }

    public function falar(){
        echo "Pru pru \n";
    }
    }