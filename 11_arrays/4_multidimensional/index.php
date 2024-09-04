<?php    
    $arr = [
        [1,2,3],
        [2,4,6]
    ];

    print_r($arr);
    echo "\n";

    echo $arr[0][1] . "\n"; //1a linha, 2° elemento
    echo $arr[1][2] . "\n"; //2a linha, 3° elemento

    echo count($arr) . "\n"; //QTDE DE ELEMENTOS NO ARRAY
    echo count($arr[0]) . "\n";//QTDE DE ELEMENTOS NA 1a LINHA

    //EX (imprima cada linha e cada elemento)
    $arr = [
        [1,2,3,4],
        [2,4,6,8],
        [3,6,9,12]
    ];

    //loop no array externo
    for($i = 0; $i < count($arr); $i++){
        echo "Imprimindo array externo " . ($i + 1) . "\n";
        
        for($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j] . "\n";
        }
    }