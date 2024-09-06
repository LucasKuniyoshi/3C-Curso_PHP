<?php
    $arr = [1,2,4,19,234,34,5,12];

    function soma($a,$b){
        return $a + $b;
    }

    function subtracao($a,$b){
        return $a - $b;
    }

    //executa a funcao "soma" no array $arr até retornar somente o item final
    //o primeiro indice se torna a soma dos dois itens a cada iteração
    $resultado = array_reduce($arr, "soma");
    
    echo "$resultado \n";

    $resultado2 = array_reduce($arr, "subtracao");
    
    echo "$resultado2 \n";