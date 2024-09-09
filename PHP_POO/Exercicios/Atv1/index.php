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