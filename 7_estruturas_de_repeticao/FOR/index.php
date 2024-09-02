<?php
    //FOR
    
    /*for($i = 0; $i < 10; $i++){
        echo "Print de I: $i, ";
    }*/

    //
    /*$a = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    for($i = 0; $i < count($a); $i++){
        if($a[$i] % 2 == 0){
            echo "Print: " . $a[$i] . ", ";
        }
    }*/

    //CRIANDO VETOR NO LOOP
    /*$v = [];

    for($i = 1; $i <= 10; $i++){
        //VETOR, ELEMENTO QUE VAI COLOCAR NO VETOR 
        array_push($v, $i);//DA UM PUSH NO $i PRA DENTRO DO VETOR $V
    }
    print_r($v);*/

    //
    $a = [];

    for($i = 10; $i <= 20; $i++){
        array_push($a, $i);
    }
    print_r($a);