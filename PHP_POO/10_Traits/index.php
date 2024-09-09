<?php
    //permite herdar sem necessariamnete usar HERANÇA
    trait Objeto {
        public function teste(){
            echo "Testando trait de objeto \n";
        }
    }

    trait Testando{
        public function traitTeste(){
            echo "Este método é da trait Testando \n";
        }
    }

    class Central{
        use Objeto;
        use Testando;
    }

    $x = new Central;

    $x->teste();
    $x->traitTeste();