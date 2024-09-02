<?php
    //CONTINUE
    /*$a = 10;

    while($a > 0){

        if($a == 5 || $a == 7){
            echo "Pulou a execução $a <br>";

            $a--;

            continue;
        }

        if($a == 2){
            echo "Encerrando o loop em $a <br>";
            break;
        }

        echo "Executando o loop $a <br>";
        $a--;
    }*/

    $b = [10, 20, 30,40,50,60,70,80,90,100];
    $i = 0;

    while($i < count($b)){
        if($b[$i] == 30 || $b[$i] == 40){
            //echo "É $b[$i], ent pulou. ";
            $b[$i]++;
            $i++;
            continue;
        }

        echo $b[$i] . " , ";
        $b[$i]++;
        $i++;
    }