<div class="titulo">Traits</div>

<?php
    trait validacao{
        public $a = 'Valor a';
        public function validarString($str){
            return isset($str) && $str !== '';//isset() => verifica se a string "is set",  se está setada/existe
        }
    }

    trait validacaoMelhor{
        public $b = 'Valor b';
        private $c = 'Valor c (privado)';

        public function validarStringMelhor($str){
            return isset($str) && trim($str); // trim => retira os espaços em branco das pontas da string
        }
    }

    class Usuario{
        use validacao, validacaoMelhor; //REUSA CÓDIGO SEM PRECISAR SER HERANÇA
        public function imprimirValorC(){
            echo '<br>', $this->c;
        }
    }

    $usuario = new Usuario();
    var_dump($usuario->validarString(' '));
    echo "<br>";
    var_dump($usuario->validarStringMelhor(' '));
    echo "<br>";
    echo $usuario->a, '<br>', $usuario->b;
    echo "<br>";
    echo $usuario->imprimirValorC();