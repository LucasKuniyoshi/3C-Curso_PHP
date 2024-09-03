<?php
    if(true){
        echo "Deu certo";
    }else{
        echo "N deu certo";
    }

    if(true){
        if(!false){
            echo "deu boa";
        }
    }  

    if(10 > 5){
        echo "Entrou no IF <br>";
    } else if(10 > 6){
        echo "Entrou do else if";
    }

    if(!(10 > 5)){
        echo "Entrou no IF <br>";
    } else if(10 > 6){
        echo "Entrou do else if 2 <br>";
    }

    $v = 80;

    if($v < 40){
        echo "Velocidade correta <br>";
    } else if($v == 40){
        echo "Tome cuidad0 <br>";
    }else{
        echo "Multado otário!";
    }