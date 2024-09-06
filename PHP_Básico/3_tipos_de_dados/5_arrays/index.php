<?php

    $a = [1,2,3]; //ARRAY
    print_r($a); //PRINTA ARRAY / ECHO N PRINTA ARRAY

    echo "<br>";
    echo $a[0]; //PRINTA SÓ O ELEMENTO NO INDICE ZERO

    $v = ["Lucas", 7, true];

    print_r($v);
    print_r($v[1]); //PRINTA ARRAY 

    //ARRAY ASSOCIATIVO

    $arr = ['nome' => 'Lucas', 'idade' => 29];

    echo $arr['nome'];
    print_r($arr);


    $car = ['modelo' => "Civic", 'marca' => 'Honda', 'ignicao' => 1.6, 'ano' => 2008];

    print_r($car);

    $carmodelo = $car['modelo'];
    $carano = $car['ano'];
    echo "O carro é de $carano, modelo $carmodelo";

    if($car['ano'] > 2001){
        echo "O carro n é taõ velho";
    }

