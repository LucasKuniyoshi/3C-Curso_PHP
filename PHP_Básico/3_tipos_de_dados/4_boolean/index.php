<?php
    echo true; //1

    echo false; //aparece nada

    if(true){
        echo "É verdadeiro <br>";
    }

    if(5 > 2){
        echo "É verdadeiro <br>";
    }

    $pd = true;
    if($pd){
        echo "É verdadeiro <br>";
    }

    //CHECAGEM DE TIPO
    if(is_bool(true)){
        echo "é boolean";
    }

    $ed = false;

    if(is_bool($ed)){
        echo "é boolean2";
    }

    /* 1 - TRUE / 0 - FALSE */
    if(is_bool(0)){
        echo "é boolean";
    }

    if(0 == false){
        echo "zero é false";
    }

    if(0.0 == false){
        echo "zero é false";
    }