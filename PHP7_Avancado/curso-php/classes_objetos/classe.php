<div class="titulo">Primeira Classe</div>

<?php
    class Cliente{
        //atributos
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar(){
            echo "Noma: $this->nome, Idade: $this->idade \n";
        }
    }

    $c1 = new Cliente();
    //$c1->apresentar();
    $c1->nome = 'Lucas Santos';
    $c1->idade = 22;
    $c1->apresentar();