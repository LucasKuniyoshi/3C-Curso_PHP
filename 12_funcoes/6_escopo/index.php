<?php
    //ESCOPO GLOBAL X LOCAL
    $a = 10;
    $b = 15;

    function testeEscopo(){
        $a = 3;

        global $b;

        $a++;

        echo "Escopo local de A é $a. ";

        echo "Escopo Global na funcao de B é $b. ";
    }

    echo "Escopo global de A é $a. ";
    echo "Escopo global de B é $a. ";

    testeEscopo();
    echo "Escopo global de B 2 é $a. ";
        

    //PRINTA OS VALORES DE UM VETOR ATÉ 30
    $a = [];
    for($i = 0; $i <= 30; $i++){
        array_push($a, $i);
    }

    print_r($a);

    //PRINTA SÓ OS MAIORES Q 7, A PARTIR DO VETOR CRIADO ANTERIORMENTE
    function MaiorSete($v){
        $ArrayRetorno = [];

        for($i = 0; $i <= count($v); $i++){
            if($v[$i] > 7){
                array_push($ArrayRetorno, $v[$i]); // vetor vazio onde sera incerido o valor / valor a ser incerido
            }
        }

        return $ArrayRetorno;
    }

    $newArray = MaiorSete($a);
    print_r($newArray);