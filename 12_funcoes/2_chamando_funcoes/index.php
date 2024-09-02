<?php
    //DEIFININDO A FUNCAO
    function soma(){
        echo 3 + 3 . "<br>"; 
    }

    //CHAMANDO / INVOCANDO FUNCAO
    soma();
    soma();

    echo strtoupper("testando função . ");

    function multi(){
        $a = 2;
        $b = 6;
        $c = 3;
        return $a * $b * $c;
    }

    echo multi();