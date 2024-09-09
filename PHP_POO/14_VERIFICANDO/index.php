<?php
    //VERIFICAÇÃO DE CLASSE
    class Humano{
        public $idade;
        public $nome;
        public $profissao;

        public function falar(){
            echo "Olá";
        }

        public function andar(){}
    }

    if(class_exists("Humano")){
        echo "A classe humano existe \n";
    }

    print_r(get_class_vars("Humano"));

    print_r(get_class_methods("Humano"));


    //VERIFICAÇÃO DE OBJETOS
    $lucas = new Humano;

    if(is_object($lucas)){
        echo "É um objeto \n";
    }else{
        echo "N é um objeto \n";
    }

    echo get_class($lucas) . "\n"; //retorna o nome da classe

    if(method_exists($lucas, "falar")){
        echo "Método existe \n";
    }else{
        echo "Método n existe \n";
    }

    if(method_exists($lucas, "asd")){
        echo "Método existe \n";
    }else{
        echo "Método n existe \n";
    }