<?php
    class Funcionario extends Humano{
        public $nome;
        public $idade;
        public $endereco;
        public $contato;

        function __construct($nome, $idade, $endereco, $contato){
            parent::__construct($nome, $idade, $endereco, $contato);
        }
    }