<?php
    //Ex1
    class Pessoa{
        public $nome;
        public $idade;
        public $diaNascimento;
        public $mesNascimento;
        public $anoNascimento;

        function calculaIdade($diaNascimento, $mesNascimento, $anoNascimento){
            $this->diaNascimento = $diaNascimento;
            $this->mesNascimento = $mesNascimento;
            $this->anoNascimento = $anoNascimento;
            $this->idade = 2024 - $anoNascimento;
        }

        function InformaIdade(){
            return $this->idade;
        }

        function InformaNome(){
            return $this->nome;
        }

        function ajustaDataDeNascimento($diaNascimento, $mesNascimento, $anoNascimento){
            $this->diaNascimento = $diaNascimento;
            $this->mesNascimento = $mesNascimento;
            $this->anoNascimento = $anoNascimento;
            $this->idade = 2024 - $anoNascimento;
        }
    }

    $lucas = new Pessoa;

    $lucas->calculaIdade(19,8,2002);
    echo $lucas->InformaIdade() . "\n";

    $lucas->ajustaDataDeNascimento(17, 2,2006);
    echo $lucas->InformaIdade() . "\n";

    //Ex2
    class Universidade{
        public $nome;

        function __construct($nome){
            $this->nome = $nome;
            return $this->nome;
        }

        public function informar(){
            echo $this->nome;
        }
    }

    class Pessoa2 extends Universidade{
        public $nomePessoa;
        public $universidade;

        function __construct($nomePessoa, $universidade){
            $this->nomePessoa = $nomePessoa;
            $this->universidade = $universidade;
        }

        public function informar(){
            echo $this->nomePessoa . " trabalha na " . $this->universidade;
        }
    }

    $puc = new Universidade("PUC");
    $b = $puc->informar();
    echo $b . "\n";

    $unicentro = new Universidade("Unicentro");
    $a = $unicentro->informar();
    echo $a  . "\n";

    $lucas = new Pessoa2("Lucas", "Unicentro");
    echo $lucas->informar() . "\n";

    $rapha = new Pessoa2("Rapha", "PUC");
    echo $rapha->informar() . "\n";

    //Ex3
    class Produto{
        public $nome;
        public $preco;
        public $qtde;

        function __construct($nome, $preco, $qtde){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->qtde = $qtde;
        }

        public function produtoNome(){
            return $this->nome;
        }
        public function produtoPreco(){
            return $this->preco;
        }
        public function produtoQtde(){
            return $this->qtde;
        }
    }

    class Item extends Produto{
    }