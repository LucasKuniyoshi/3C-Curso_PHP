<div class="titulo">Interface</div>

<?php
    //METODOS E COMPORTAMENTOS Q DEVEM SER IMPLEMENTADOS A PARTIR DAS CLASSES
    interface Animal{
        function respirar();
    }

    interface Mamifero{
        function mamar();
    }

    Interface Canino extends Animal, Mamifero{
        function latir(): string; //retorna string
    }

    class Cachorro implements Canino{
        function respirar(){
            return "Respiradas caninas";
        }

        function latir(): string {
            return 'Au au';
        }

        function mamar(){
            return "mamou";
        }
    }

    $a = new Cachorro;
    echo $a->respirar(), '<br>';
    echo $a->latir(), '<br>';
    echo $a->mamar(), '<br>';

    echo "<br>";
    var_dump($a); //mostra o tipo do objeto
    
    echo "<br>";
    var_dump($a instanceof Animal);
    var_dump($a instanceof Mamifero);
    var_dump($a instanceof Canino);
    var_dump($a instanceof Cachorro);