<?php
//N SE PODE INSTANCIAR CLASSES ABSTRATAS
    abstract class Teste{
        public static function testandoClasse(){
            echo "Este método é uma classe abstrata \n";
        }
        //n declara corpo, age como se fosse uma interface
        abstract public function testeAbs();
    }

    //podesse utilizar metodo de uma classe sem q ela esteja instanciada
    Teste::testandoClasse(); //PODE CHAMAR O MÉTODO DIRETO SE ELE FOR ESTÁTICO 

    class Nova extends Teste{
        public function testeAbs(){
            echo "Teste método abstrato \n";
        }
    }

    $a = new Nova;

    $a->testeAbs();