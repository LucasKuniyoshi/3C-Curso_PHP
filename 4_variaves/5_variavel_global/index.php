<?php

    $teste = "asd"; 
    echo "$teste global 1";

    if(5 > 2){
        $teste = "sda";
        echo "$teste no IF";
    }

    echo "$teste global 2";

    function funcao(){
        global $teste;
        $teste = 2;
        echo "$teste funcao <br>";
    }

    funcao();

