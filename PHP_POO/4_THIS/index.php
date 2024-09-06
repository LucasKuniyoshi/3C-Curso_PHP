<?php
    //THIS => SE REFERE A INSTANCIA ATUAL DO OBJETO
    //PODE CHAMAR TANTO ATRIBUTOS QUANTO FUNCOES/METODOS
    class Animal{
        public $nome;

        function escolherNome($nome){
            //A PROPIEDADE NOME RECEBE O VALOR DA VARIAVEL NOME
            $this->nome = $nome;
        }

        function latir(){
            return "Au au \n";
        }
        //chama a funcao q está presenta na mesma classe 
        function latirForte(){
            return strtoupper($this->latir());
        }
    }

    $buti = new Animal;

    echo "O nome do animal é: $buti->nome \n";
    
    $buti->escolherNome("Buti");

    echo "O nome do animal é: $buti->nome \n";

    echo $buti->latir();
    echo $buti->latirForte();

    //Ex
    class Car{
        public $modelo;
        public $rodas;
        public $velocidade_maxima;

        function setVelocidadeMaxima($vel){
            $this->velocidade_maxima = $vel;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima do carro é de: $this->velocidade_maxima Km/h \n";
        }
    }

    $bmw = new Car;

    $bmw->modelo = "BMW";
    $bmw->rodas = 4;
    $bmw->setVelocidadeMaxima(200);
    $bmw->getVelocidadeMaxima();