<?php
    class Veterinario extends Funcionario{
        public $nome;
        public $idade;
        public $endereco;
        public $contato;
        private $salario = 4250;

        function __construct($nome, $idade, $endereco, $contato){
            parent::__construct($nome, $idade, $endereco, $contato);
        }

        public function setSalario(){
            $this->salario = $salario;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function mostrarSalario(){
            return "O Veterinário " . $this->nome . " possui o salário de " . $this->getSalario() . " reais";
        }
    }