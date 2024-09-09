<?php
    class Humano{
        public $idade = 22;

        public function falar(){
            echo "Olá Mundo \n";
        }
        //só pode sr acessado nessa classe
        private function gritar(){
            echo "ESTOY A GRITAR!! \n";
        }

        public function acessaGritar(){
            $this->gritar();
        }
        //pode ser acessado nas suas subclasses 'protected'
        protected function falarBaixo(){
            echo "falando baixinho \n";
        }

        public function acessaFalarBaixo(){
            $this->falarBaixo();
        }
    }

    class Programador extends Humano{
        public function acessaFalarBaixoProgramador(){
            $this->falarBaixo(); //N PODERIA SER O gritar() DEVIDO AO PRIVATE
        }
    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessaGritar();
    $ze->acessaFalarBaixo(); //n permite acessar o falarBaixo diretamente devido ao protected

    $lucas = new Programador;

    echo $lucas->idade . "\n";

    $lucas->acessaGritar();
    $lucas->acessaFalarBaixoProgramador();
    echo "\n";

    //Ex2
    class Humano2{
        public $altura = 1.83;

        protected function falar2(){
            echo "AAAAAAA \n";
        }

        public function acessafalar2(){
            $this->falar2();
        }
    }

    class Professor extends Humano2{
        public $materia = "História";
        
        private function aula(){
            echo "Vamos iniciar a aula de $this->materia \n";
        }

        public function acessaAula(){
            $this->aula();
        }
    }

    $tiago = new Humano2;
    echo $tiago->altura . "\n";
    $tiago->acessafalar2();

    $maria = new Professor;
    //echo $maria->materia . "\n";
    $maria->acessaAula();
