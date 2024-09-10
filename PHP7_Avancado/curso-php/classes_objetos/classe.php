<div class="titulo">Primeira Classe</div>

<?php
    class Cliente{
        //atributos
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar(){
            return "Nome: {$this->nome}, Idade: {$this->idade} <br>";
        }
    }

    $c1 = new Cliente();
    //$c1->apresentar();
    echo $c1->nome, "<br>";
    $c1->nome = 'Lucas Kuniyoshi';
    echo $c1->nome, "<br>";
    $c1->idade = 22;
    

    $c2 = new Cliente;
    $c2->nome = 'Gabriel';
    $c2->idade = 43;

    echo $c1->apresentar();
    echo $c2->apresentar();
