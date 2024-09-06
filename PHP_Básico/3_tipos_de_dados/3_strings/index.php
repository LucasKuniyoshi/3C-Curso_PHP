<?php
    echo "Testando texto de aspas duplas";
    echo 'Testando texto de aspas simples';

    $idade = 15;
    echo "Ele tem $idade anos";
    echo 'Ele tem $idade anos'; 

    //CHECAGEM DE TIPO
    $str = "é um string";

    if(is_string($str)){
        echo "é um string!";
    }

    if(is_string("É uma string")){
        echo "é um string!";
    }