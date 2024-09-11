<?php
    class Pessoa{
        public $nome;
        public $idade;
        public Pessoa $pai;
        public Pessoa $mae;

        function __construct($nome, $idade, $pai, $mae){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->pai->nome = $pai;
            $this->mae->nome = $mae;
        }

        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getPai(){
            return $this->pai->nome;
        }
        public function getMae(){
            return $this->mae->nome;
        }
    }

    $lucas = new Pessoa("Lucas", 22, "Edson", "Sandra");
    echo $lucas->getNome() . " é prole de " . $lucas->getPai() . " e " . $lucas->getMae();