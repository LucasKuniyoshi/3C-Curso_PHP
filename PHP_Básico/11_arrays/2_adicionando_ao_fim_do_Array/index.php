<?php
    $arr = [1, 2, 3];
    $arr[] = 4;

    print_r($arr);
    echo "\n";

    $arr[] = 5;

    print_r($arr);
    echo "\n";

    //CRIAÇÃO DE ARRAY
    $array = range(1,10);// DE 1 A 10
    print_r($array);
    echo "\n";

    $array = range(1, 100, 10); //DE 1 A 100, INDO DE 10 EM 10
    print_r($array);
    echo "\n";

    //EX
    //CRIE UM ARRAY DE 10 A 45, SOME CADA NUM COM 6 E IMPRIMA Q O NUM É ALTO SE PASSAR DE 30
    $array = range(10, 45);

    for($i = 0; $i < count($array); $i++){
        
        $soma = $array[$i] + 6;
        echo "$soma \n";

        if($soma > 30){
            echo "O número é muito alto \n";
        }
    }