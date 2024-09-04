<?php
    //CONVERTENDO STRING PARA ARRAY
    $frase = "Testando o explode";
    $fraseArray = explode(" ", $frase);

    print_r($fraseArray);
    echo "\n";

    //separando po virgulas
    $frase = "Testando o explode,  separando por virgulas";
    $fraseArray = explode(",", $frase);

    print_r($fraseArray);
    echo "\n";

    $frase2 = "Carro, Avião, Barco, Moto";
    $fraseArray2 = explode(",", $frase2);


    for($i = 0; $i < count($fraseArray2); $i++){
        echo "$fraseArray2[$i] \n";
    }


    //CONVERTENDO ARRAY PARA STRING
    $arr = ["Maça", "Banana", "Pera", "Laranja"];
    $str = implode(", ", $arr);
    echo $str . "\n";

    $str2 = implode(" <-> ", $arr);
    echo $str2;