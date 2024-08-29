<?php
    //DECLARACAO E PRINT
    $a = 1.12;
    echo $a;

    echo 123.34 + 324.78;

    //VERIFICACAO
    if(is_float(2.5)){
        echo "é um float";
    }

    if(is_float($a)){
        echo "é um float";
    }

    $f = "teste";
    if(is_float($f)){ //N É UM FLOAT
        echo "é um float";
    }