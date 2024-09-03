<?php
    $arr = [
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
    ];

    function itensCaros($arr){
        $arrItensCaros = [];

        foreach($arr as $item => $preço){
            if($preço > 10){
                array_push($arrItensCaros, $item);
            }
        }

        return $arrItensCaros;
    }

    print_r(itensCaros($arr));