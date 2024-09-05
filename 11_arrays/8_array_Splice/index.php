<?php
    //RESGATAR ELEMENTOS DE ARRAY
    //REMOVER ELEMENTOS
    $arr = [1,2,3,4,5,6];
    //vetor / indice / quantos elementos pega
    $removidos = array_splice($arr, 1, 2);

    print_r($arr);
    echo "\n";

    print_r($removidos);
    echo "\n";

    $arr2 = [1,2,3,4,5,6];
    //pega a partir do indice 3, remove da vetor
    $removidos2 = array_splice($arr, 3);

    print_r($arr2);
    echo "\n";

    print_r($removidos2);
    echo "\n";

    $arr3 = [1,2,3,4,5,6];
    
    $removidos3 = array_splice($arr, 1, -1);

    print_r($arr3);
    echo "\n";

    print_r($removidos3);
    echo "\n";