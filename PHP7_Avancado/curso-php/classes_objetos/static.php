<div class="titulo">Membros Estáticos</div>

<?php
    class A{
        public $naoStatic = "Variável de instância";
        public static $static = "Variável de classe (estática)";

        public function mostrarA(){
            echo "Não estática = {$this->naoStatic} <br>";
            //Tentativa 1
            // echo "Estática = {$this->static} <br>"; 
            echo "Estática = " . self::$static . "<br>"; //IMPRIME COMO SE FOSSE CONSTANTE
        }

        //DENTRO DE UMA FUNÇÃO ESTÁTICA, SÓ SE PODE ACESSAR ELEMENTOS ESTÁTICOS
        public static function mostrarStaticA(){
            echo "Estática = " . self::$static . "<br>";
        }
    }

    $objetoA = new A();
    $objetoA->mostrarA();
    $objetoA->mostrarStaticA(); //n é a forma ideal
    // n pertence ao objeto, pertence a classe, Logo:
    A::mostrarStaticA();
    echo A::$static, '<br>'; //imprimindo o elemento estático a partir da classe (acessa diretamente pela classe)

    A::$static = 'Alterando membro de classe!';
    echo A::$static, '<br>';