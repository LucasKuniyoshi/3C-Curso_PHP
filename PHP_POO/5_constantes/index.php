<?php
    class Humano{
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante(){
            //utilizando constante em metodo
            echo self::BRACOS . "\n";
        }
    }

    $lucas = new Humano;
    //utiliza "::" no lugar da "->"
    echo $lucas::OLHOS . "\n";
    $lucas->mostrarConstante();