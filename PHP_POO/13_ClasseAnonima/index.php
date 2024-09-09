<?php
   
    //N DA PRA FAZER HERANÇA
    $pessoa = new class(){
        public $nome = "Lucas";

        public function dizerNome(){
            echo "Olá meu nome é $this->nome \n";
        }
    };

    echo $pessoa->nome . "\n";

    $pessoa->dizerNome();