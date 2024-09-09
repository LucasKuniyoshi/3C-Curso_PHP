<?php
    //INICIALIZA O OBJETO COM VALORES JÁ PRÉ-DEFINIDOS
    class Car{
        public $portas;
        public $cor;
        public $marca;
        
        function __construct($portas, $cor, $marca){
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
    }

    $ferrari = new Car(4, "Vermelha", "Ferrari");

    echo "O carro $ferrari->marca tem a cor $ferrari->cor e $ferrari->portas portas \n";

    $bmw = new Car(4, "Azul", "BMW");

    echo "O carro $bmw->marca tem a cor $bmw->cor e $bmw->portas portas \n";

    //Ex
    class Cachorro{
        public $patas;
        public $raca;
        public $nome;

        function __construct($patas, $raca, $nome){
            $this->patas = $patas;
            $this->raca = $raca;
            $this->nome = $nome;
        }

        function descricao(){
            echo "O cão $this->nome possui $this->patas e é da raça $this->raca. \n";
        }
    }


    $buti = new Cachorro(4, "Chow chow", "Buti");
    $buti->descricao();