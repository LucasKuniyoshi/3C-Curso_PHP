<?php
    $arr = [
        'cor' => 'vermelho',
        'forma' => 'retângular',
        'material' => 'aço'
    ];

    //EXTRAI O VALOR DA CHAVE
    extract($arr);

    echo "$cor \n";
    echo "$forma \n";
    echo "$material \n";

    //COMPACT
    $marca = "BMW";
    $motor = "3.0";
    $tetoSolar = true;
    $portas = 4;
    
    //ADICIONA VALORES A UM ARRAY
    $carro = compact("marca", "motor", "tetoSolar", "portas");
    print_r($carro);