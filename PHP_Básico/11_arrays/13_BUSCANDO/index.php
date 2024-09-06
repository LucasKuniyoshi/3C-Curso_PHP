<?php
    $arr = ['banana', 'maça', 'batata', 'pêra', 'mamão'];

    if(in_array("batata", $arr)){
        echo "Há o item batata no array \n";
    }else{
        echo "Não há o item batata no array \n";
    }

    //ORDENAÇÃO
    $arr2 = [12,33,6,86,23,56,765,1,4,5];

    sort($arr2);

    print_r($arr2);
    echo "\n";

    rsort($arr2);

    print_r($arr2);
    echo "\n";

    //ORDENAÇÃO DE ARRAYS ASSOCIATIVOS
    $arr3 = [
        'Matheus' => 29,
        'Lucas' => 22,
        'Joaquim' => 14,
        'Maria' => 12
    ];
    //ordena de acordo com o valor NAS chaves 
    asort($arr3);

    print_r($arr3);
    echo "\n";

    //reverse
    arsort($arr3);

    print_r($arr3);
    echo "\n";

    //ordena de acordo com o valor DAS chaves (indice)
    ksort($arr3);

    print_r($arr3);
    echo "\n";

    //reverse
    krsort($arr3);

    print_r($arr3);
    echo "\n";

    //ORDENAÇÃO ALEATÓRIA
    $arr4 = range(1,20);

    print_r($arr4);
    echo "\n";

    shuffle($arr4); // modifica a estrutura original

    print_r($arr4);
    echo "\n";