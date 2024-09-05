<?php
    //1
    /*$arr = [];
    for($a = 5; count($arr) <= 10; $a += 5){
        array_push($arr, $a);
    }
    print_r($arr);*/

    //2
    /*$arr = [1,34,76,9,2,56,8,3,6,0];
    $positivo = 0;
    $negativo = 0;
    $par = 0;
    $impar = 0;

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] >= 0){      
            $positivo++;
        }else{
            $negativo++;
        }

        if($arr[$i] % 2 == 0){
            $par++;
        }else{
            $impar++;
        }
    }

    Echo "Números Positivos: $positivo \n"; 
    Echo "Números Negativos: $negativo \n"; 
    Echo "Números Pares: $par \n"; 
    Echo "Números impares: $impar \n"; */

    //3
    /*$arr = [1,3,5,7,9,4,7,945,4,12];

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] >= 0){
            if($arr[$i] >= $arr[$i+1] && $arr[$i+1] != NULL){
                $maior = $arr[$i];
                $indice = $i;
            }
        }
    }
    echo "Maior: " . $maior . "\n";
    echo "Indice: $indice \n";*/

    //4
    $a = [1,3,456,87,98,5,677,456,45,2];
    $b = readline();
    array_push($a, $b);
    $c = [];

    for($i = 0; $i < count($a); $i++){
        array_push($c, $a[$i] * $b);
    }

    print_r($c);

    //5
    