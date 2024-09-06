<?php
    echo 5/2;
    if(is_float(5/2)){
        echo " é float, ";
    }

    echo 2 . 3;
    if(is_string(2 . 3)){
        echo " é string, ";
    }

    $nome = "Lucas";
    $sobrenome = "Santos";

    $nomeCompleto = $nome . " " . $sobrenome;
    echo $nomeCompleto;