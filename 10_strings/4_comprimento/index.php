<?php
    //COMPRIMENTO DE UMA STRING
    $str1 = "Esta string é muito grande";
    $str2 = "Esta não";

    echo strlen($str1) . "\n";
    echo strlen($str2) . "\n";

    $len1 = strlen($str1);
    $len2 = strlen($str2);

    if($len1 > $len2){
        echo "A string 1 é maior que a string 2";
    } else{
        echo "A string 2 é maior que a string 1";
    }

    //PERCORRENDO UMA STRING
    $str = "Esta string é giiiiiiiiiigante";

    for($i = 0; $i < strlen($str); $i++){
        echo "$str[$i] \n";
    }

    //EX imprima somente as letras "a" da frase
    $frase = "O rato roeu a roupa do rei de Roma";
    $contadorDeAs = 0;

    for($i = 0; $i < strlen($frase); $i++){
        if($frase[$i] === 'a'){
            echo $frase[$i];
            $contadorDeAs++;
        }
    }
    echo "O numero de A's é $contadorDeAs";
