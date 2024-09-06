<?php
    class Pessoa{
        function falar(){
            echo "Olá, eu sou um objeto \n";
        }

        function somar($x, $y){
            echo $x + $y . "\n";
        }
    }

    $lucas = new Pessoa;

    $lucas->falar();

    //mesmo objeto, diferentes métodos
    $matheus = new Pessoa;
    $matheus->somar(2,5);

    //Ex
    class Cachorro{
        function latir(){
            echo "Au au \n";
        }

        function andar(){
            echo "Estoy a andar \n";
        }
    }

    $dino = new Cachorro;
    $buti = new Cachorro;

    $dino->latir();
    $buti->andar();