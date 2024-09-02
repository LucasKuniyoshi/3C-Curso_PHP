<?php
    function soma($a, $b, $c){
        print_r(func_get_args()); //printa os argumentos / elementos
        
        echo func_num_args(); //printa o nnumero de elementos

        return $a + $b;
    }
    soma(2,3,5);

    echo " ";

    //Ex de array itens mercado e os separa por virgulas
    $items = ["pão", "arroz", "azeite", "coca"];

    //JUNTA O VETOR NUMA STRING ÚNICA, POSSIBILITA SEPARÁ-LOS COMO QUEIRA
    $teste = implode(", ", $items);

    echo $teste;