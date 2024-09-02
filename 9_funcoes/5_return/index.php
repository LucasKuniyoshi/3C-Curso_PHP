<?php
    function soma($a, $b){
        return $a + $b;
    }

    $x = soma(2,7);
    echo $x . ", ";  

    //NUMERO AO QUADRADO
    function quad($a){
        return $a ** 2;
    }

    $r = 10;
    quad($r);
    echo quad($r);
