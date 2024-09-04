<?php
    $str = "Esta é minha string";
    //(a string, indice inicial do vetor, comprimento da string (pega 5 elementos)
    $minha = substr($str, 10, 5);

    echo $str;
    echo $minha;

    $novaString = substr($str, 8); //OMITIR COMPRIMENTO => PEGA DE UM INDICE E VAI ATÉ O FINAL
    $novaString = substr($str, 8, -3);// COMPRIMENTO NEGATIVO => REMOVE O ULTIMO INDICE
    echo "\n\n";

    //Ex
    $str2 = "Cadê o meu queijo? Ele estava aqui em cima";
    $queijo = substr($str2, 12, 6);
    $estava = substr($str2, 24, 6);
    echo "$queijo , $estava";
    echo "\n";


    //INVERTENDO STRING
    $str = "Testando";
    $palavraInvertida = strrev($str);
    echo "$str \n";
    echo "$palavraInvertida \n";

    //REPETIÇÃO DE STRING
    $stringRepetida = str_repeat($str, 5);
    echo $stringRepetida;