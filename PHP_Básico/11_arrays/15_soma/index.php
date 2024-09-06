
<?php
    $arr = [2,3,4,6,7,2,4,56];

    $soma = array_sum($arr);

    print_r($arr);
    echo "\n";
    echo $soma . "\n";

    //UNINDO ARRAYS (MERGE)
    $arr2 = [2,4,6];
    $arr3 = [3,5,7];
    $arr4 = [10,11,12];

    $arrMerge = array_merge($arr2, $arr3, $arr4, [0,100]); //pode adicionar elementos no fim de vetor tbm "[0,100]"

    print_r($arrMerge);
    echo "\n";

    //CALCULANDO DIFRENÇAS ENTRE ARRAYS
    $diff = array_diff($arr, $arr2); //o q tem no array 1 q n tem no array2

    print_r($diff);
    echo "\n";