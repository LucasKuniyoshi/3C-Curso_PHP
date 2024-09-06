<?php
    class Car{
        public $rodas;
        public $aro = 20;
        public $cor = "Vermleho";

        function ligar(){
            echo "Vruummmm \n";
        }
    }

    $ferrari = new Car;

    echo $ferrari->aro . "\n";
    echo $ferrari->rodas = 4 . "\n";

    $ferrari->cor = "Azul \n";
    echo $ferrari->cor;

    $ferrari->ligar();

    //Ex
    class Pessoa{
        public $nome;
        public $idade;

        function andar($m){
            echo "Estoy a andar por la $m";
        }
    }

    $lucas = new Pessoa;
    $lucas->nome = "Lucas";
    $lucas->idade = 22;

    echo "Meu nome é $lucas->nome, tenho $lucas->idade anos. \n";
    echo $lucas->andar("avenida") . ". \n";