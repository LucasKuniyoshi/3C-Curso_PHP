<?php
    //AND &&
    if(5 > 2 && 10 < 100){
        echo "Uso do AND , ";
    }

    if(15 > 5 && "João" === "João"){
        echo "Uso do AND , ";
    }
    if(10 > 5 && 1){ // 1 = true
        echo "Uso do AND , "; //imprime sim
    }
    if(2 == 3 && 5 > 3){
        echo "Uso do AND , ";
    }

    //OR ||
    if(5 > 2 || 10 > 100){
        echo "Uso do OR , ";
    }

    //NOT ! (Inverte o valor booleano -> true => false e false => true)
    if(5 > 2){
        echo " A operação 1 é verdadeira , ";
    }

    if(!(1 > 2)){
        echo " A operação 2 é verdadeira , ";
    }