<div class="titulo">Métodos Mágicos</div>

<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome, $idade){
            echo "Construtor invocado <br>";
            $this->nome = $nome;
            $this->idade = $idade;
        }

        function __destruct(){
            echo "E morreu!";
        }

        // 1. vai sobrescrever o retorno dessa classe
        function __toString(){
            return "{$this->nome} tem {$this->idade} anos.";
        }

        public function apresentar(){
            //como o toString vai sobrescrever, n importa muito o q vai retornar aqui 
            echo $this . '<br>';
        }
        //2.
        //RETORNA ALGO QUANDO É CHAMADO UM ATRIBUTO Q N EXISTE
        public function __get($atrib){
            echo "Lendo atributo não declarado: {$atrib} <br>";
        }
        //CHAMADO SEMPRE Q VC TENTAR ALTERAR UM ATRIBUTO Q N EXISTE
        public function __set($atrib, $valor){
            echo "Alterando atributo não declarado: {$atrib}/{$valor} <br>";
        }
        //3.
        //QUANDO VC CHAMA UM MÉTODO NO OBJETO Q N EXISTE
        public function __call($metodo, $params){
            echo "Tentando executar o método '${metodo}'";
            echo "<br>, com parametros";
            print_r($params);
        }
    }
    //1. __toString
    $pessoa = new Pessoa('Lucas', 22); // __construct
    $pessoa->apresentar();
    //ou
    echo '<br>', $pessoa;
    
    $pessoa->nome = 'Veiga';
    echo '<br>';

    //chama o metodo diretamente sem __call
    $pessoa->apresentar();

    //2.
    echo $pessoa->nomeCompletooo = 'Muito legal !!!'; //__set
    echo $pessoa->nomeCompleto; //__get
    echo '<br>';
    echo $pessoa->nome; //acessa o atributo diretamente sem __get

    //3.
    $pessoa->exec(1, 'teste', true, [1,2,3]); //chama o __call pq o metdo n existe no objeto

    $pessoa = null; //chama o __destruct