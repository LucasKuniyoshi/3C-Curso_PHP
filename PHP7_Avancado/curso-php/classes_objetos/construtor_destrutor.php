<div class="titulo">Construtor e Destrutor</div>

<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($novoNome, $idade /*$idade = 18*/){
            echo "Construtor invocado! <br>";
            $this->nome = $novoNome;
            $this->idade = $idade;
        }
        //Destroi o objeto após sua execução
        function __destruct(){
            echo "E morreu! <br>";
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade} anos <br>";
        }
    }

    $a = new Pessoa("Lucas", 22);
    $a->apresentar();
    unset($a); //CHAMA O DESTRUTOR, LIBERA DA MEMÓRIA O OBJETO CRIADO

    $b = new Pessoa("Rapha", 23);
    $b->apresentar();
    $b = null; //CHAMA O DESTRUTOR, LIBERA DA MEMÓRIA O OBJETO CRIADO