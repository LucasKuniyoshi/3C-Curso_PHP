<?php
    //Ex1
    /*function soma($a, $b){
        return ($a + $b);
    }

    function subtracao($a, $b){
        return ($a - $b);
    }

    function multi($a, $b){
        return ($a * $b);
    }

    function div($a, $b){
        return ($a / $b);
    }

    $opcao = 6;
    while ($opcao != 0 || $opcao != '0'){
        //system('clear');
        echo "Informe o valor dos elementos: \n";
        echo "A: ";
        $a = readline();
        echo "B: ";
        $b = readline();

        echo "Escolha a operação:\n\n";
        echo "1.Soma:\n";
        echo "2.Subtração:\n";
        echo "3.Multiplicação:\n";
        echo "4.Divisão:\n";
        echo "5.Sair \n";

        $opcao = readline();

        switch($opcao){
            case 1: 
                echo "Valor da Soma: ";
                echo soma($a, $b);
                echo "\n";
                break;
            case 2: 
                echo "Valor da Subtração: ";
                echo subtracao($a, $b);
                echo "\n";
                break;
            case 3: 
                echo "Valor da Multiplicação: ";
                echo multi($a, $b);
                echo "\n";
                break;
            case 4: 
                echo "Valor da Divisão: ";
                echo div($a, $b);
                echo "\n";
                break;
            case 5:
                $opcao = 0;
                break;
            }
    }*/

    //Ex2
    //2a
    /*function multiQuatro($a){
        if($a % 4 == 0){
            echo "True \n"; //return true
        } else{
            echo "false\n"; //return false
        }
    }

    $num = readline();
    multiQuatro($num);*/

    //2b
    /*function parImpar($a){
        if($a % 2 == 0){
            echo "Par \n"; //return true
        } else{
            echo "Impar \n"; //return false
        }
    }

    $num = readline();
    parImpar($num);*/

    //2c
    /*function Soma2($a, $b){
        $a++;
        $op = 0;
        while($a < $b){
            $op += $a;
            $a++;
        }

        return $op;
    }

    $num = readline();
    $num2 = readline();
    echo Soma2($num, $num2) . "\n";*/

    //2d
    /*function Soma3($a, $b, $c){
        if($a > 1){
            $soma = 0;
            while($b <= $c){
                if($b % $a == 0){
                    $soma += $b;
                }
                $b++;
            }
        }
        return $soma;
    }

    $num = readline();
    $num2 = readline();
    $num3 = readline();
    echo Soma3($num, $num2, $num3) . "\n";*/

    //2e
    function PesoIdeal($a, $b){
        if($b == 'm' || $b == 'M'){
            $op = 72.7 * $a - 58;
        }else{
            $op = 62.1 * $a - 44.7;
        }

        return $op;
    }

    $altura = readline();
    $sexo = readline();
    echo PesoIdeal($altura, $sexo) . "\n";