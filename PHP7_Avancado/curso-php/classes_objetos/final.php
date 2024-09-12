<div class="titulo">Modificador Final</div>

<?php
    abstract class Abstrata{
        abstract public function metodo1();

        //FINAL => N PERMITE HERANÇA, N PERMITE SER SOBRESCRITO
        public final function metodo2(){
            echo "Não vou mudar <br>";
        }
    }

    class Classe extends Abstrata{
        public function metodo1(){
            echo "Executando método 1 <br>";
        }
        // public function metodo2(){
        //     echo "Executando método 2 <br>";
        // }
    }

    $a = new Classe();
    $a->metodo1();
    $a->metodo2();

    final class Unica{
        public $b = "Valor Único!!!";
    }

    $unica = new Unica;
    echo $unica->b;