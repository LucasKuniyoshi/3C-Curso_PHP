<?php
    class Car{
        public $rodas = 4;
        //public $vidro = "Sem película";
        private $vidro = "Sem película"; //PERMITE ACESSAR COM HERANÇA
        protected $portas = 4; // NÃO PERMITE ACESSAR COM HERANÇA

        public function getVidro(){
            return $this->vidro;
        }

        public function getPortas(){
            return $this->portas;
        }
    }

    class Mecanico{
        public function alterarRodas($carro){
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }
    }
    //altera as propriedades do carro diretamente
    $carro = new Car;
    echo $carro->rodas . "\n";

    //o mecanico altera as propriedades do carro
    $lucas = new Mecanico;
    $lucas->alterarRodas($carro);

    echo $carro->rodas . "\n";

    //N PODE ALTERAR PQ É PRIVADO
    //$lucas->colocarPelicula($carro, "G20");
    

    echo $carro->getVidro() . "\n";
    echo $carro->getPortas() . "\n";