<?php

    // $a = 0;
    // while($a < 10){
    //     echo $a . " ";
    //     $a++;
    // }

    // $b = 9;
    // while($b > 0){
    //     echo "<br>" . $b . " ";
    //     $b -= 2;
    // }

    //PRINTA SO OS STRINGS DO VETOR
    $v = ['ano', 2,4,7,8, 'sla', 'dois', 'oito', 6, '78'];
    $tamanho = count($v);
    $i = 0;
    
    while($i < $tamanho){
        if(is_string($v[$i])){
            echo $v[$i]. ", ";
        }
        $i++;
    }
    echo "<br>";

    //LOOP DE 2 EM 2 Q PARA QUANDO É IGUAL A 24
    $a = 4;
    while($a <= 30){
        echo "A: " . $a . "<br>";
        if($a == 24){
            echo "Bateu 24";
            break;
        }
        $a += 2;
    }