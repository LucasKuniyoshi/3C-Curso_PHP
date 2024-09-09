<?php
    interface Caracteristicas{
        const NOME = "Lucas";
        public function falar();
    }

    class Humano implements Caracteristicas{
        public $idade = 22;

        public function falar(){
            echo "Olá mundo!! \n";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::NOME . "\n";
        }
    }

    $lucas = new Humano;

    $lucas->falar();

    $lucas->dizerNome();