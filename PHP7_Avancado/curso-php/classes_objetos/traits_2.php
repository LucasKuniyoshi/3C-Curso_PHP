<div class="titulo">Traits 2</div>

<?php
    trait validacao{
        public $a = 'Valor a';
        public function validarString($str){
            return isset($str) && $str !== '';//isset() => verifica se a string "is set",  se está setada/existe
        }
    }

    trait validacaoMelhor{
        public function validarString($str){
            return isset($str) && trim($str); // trim => retira os espaços em branco das pontas da string
        }
    }

    class Usuario{
        use validacao, validacaoMelhor{
            //escolhe de qual trait vai puxar o metodo
            validacaoMelhor::validarString insteadOf validacao;
            //validacao::validarString insteadOf validacaoMelhor;
            validacao::validarString as validacaoSimples;
        }
    }

    $usuario = new Usuario();
    var_dump($usuario->validarString(' '));
    echo '<br>';
    var_dump($usuario->validacaoSimples(' '));