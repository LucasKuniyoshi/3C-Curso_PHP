<?php
    $pessoa = [
        'nome' => 'Lucas',
        'idade' => 22,
        'profissao' => 'Programador'
    ];

    $alexia = [
        'nome' => 'Alexia',
        'idade' => 25,
        'profissao' => 'Eng. Civil'
    ];

    foreach($pessoa as $carac => $value){
        echo "$carac => $value \n";
    }

    foreach($alexia as $value){
        echo "$value \n";
    }

    
