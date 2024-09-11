<?php
    //Ex1
    interface Staff{
        public function calculaSalario();
    }

    class Funcionario implements Staff{
        private $id;
        private $nome;
        private $cargo;
        public $salario = 2500;

        function __construct($id, $nome, $cargo){
            $this->id = $id;
            $this->nome = $nome;
            $this->cargo = $cargo;
        }

        public function getNome(){
            return $this->nome;
        }
        public function calculaSalario(){
            return "Funcionário salário: " . $this->salario;
        }
    }

    class Gerente implements Staff{
        private $cargo;
        private $qtdeColaboradores;
        public $salario = 6500;

        function __construct($cargo, $qtdeColaboradores){
            $this->cargo = $cargo;
            $this->qtdeColaboradores = $qtdeColaboradores;
        }

        public function getCargo(){
            return $this->cargo;
        }

        public function calculaSalario(){
            return "Gerente salário: " . $this->salario;
        }
    }

    $funcionario = new Funcionario(1,"João", "Operador de caixa");
    echo $funcionario->getNome() . " - ";
    echo $funcionario->calculaSalario();

    echo "\n\n";

    $funcionario = new Gerente("Líder Front", 5);
    echo $funcionario->getCargo() . " - ";
    echo $funcionario->calculaSalario();
    echo "\n";

    //Ex2
    class Objeto{
        private $altura;
        private $largura;

        function __construct($altura, $largura){
            $this->altura = $altura;
            $this->largura = $largura;
        }

        public function getAltura(){
            return $this->altura;
        }
        public function getLargura(){
            return $this->largura;
        }
    }

    class Triangulo extends Objeto{
        private $altura;
        private $largura;
        private $tipo;

        function __construct($altura, $largura, $tipo){
            $this->altura = $altura;
            $this->largura = $largura;
            $this->tipo = $tipo;
        }
        
        public function calculaArea(){
            return ($this->altura * $this->largura) / 2;
        }

        public function verificaTipo(){
            if($this->tipo == "triangulo" || $this->tipo == "Triangulo"){
                echo "Área Triangulo: " . $this->calculaArea() . "\n";
            }
        }
    }
    
    class Retangulo extends Objeto{
        private $altura;
        private $largura;

        function __construct($altura, $largura){
            //parent::__construct();
            $this->altura = $altura;
            $this->largura = $largura;
        }

        public function calculaArea(){
            return ($this->altura * $this->largura) / 2;
        }

        public function verificaTipo(){
            if($this->altura == $this->largura){
                echo "É um quadrado: " . $this->calculaArea() . "\n";
            } else{
                echo "É um retangulo: " . $this->calculaArea() . "\n";
            }
        }
    }

    $a = new Triangulo(20, 15, "triangulo");
    $a->verificaTipo();
    
    $b = new Retangulo(20, 15);
    $b->verificaTipo();
    
    $c = new Retangulo(20, 20);
    $c->verificaTipo();
