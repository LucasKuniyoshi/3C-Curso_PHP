<div class="titulo">Visibilidade</div>
<?php

    class A{
        public $publico = 'Público';
        protected $protegido = 'Protegido';
        private $privado = 'Privado';

        public function mostrarA(){
            //$this->naoMostrar();
            echo "Class A) Publico = {$this->publico} <br>";
            echo "Class A) Publico = {$this->protegido} <br>";
            echo "Class A) Publico = {$this->privado} <br>";
        }

        protected function vaiPorHeranca(){
            echo "Serei transmitido por Herança! <br>";
        }

        private function naoMostrar(){
            echo "Não vou imprimir! <br>";
        }
    }

    $a = new A;
    $a->mostrarA();
    //$a->naoMostrar();

    class B extends A{
        public function mostrarB(){
            //parent::mostrarA();
            echo "Class A) Publico = {$this->publico} <br>";
            echo "Class A) Publico = {$this->protegido} <br>";
            //echo "Class A) Publico = {$this->privado} <br>";//restrito a classe onde foi declarado
            
            parent::vaiPorHeranca();
        }
    }

    echo '<br>';
    $b = new B;
    $b->mostrarA();
    echo '<br>';
    $b->mostrarB();
    //$b->vaiPorHeranca();//essa função só pode ser acessada pela classe q a criou