<?php
    if(3 == 3){
        echo "Comparação verdadeira" . " , ";
    }

    //IDENTICO, SEGURANÇA DO TIPO
    if(3.21 == "3.21"){ //VERDADE
        echo "Comparação verdadeira" . " , ";
    }
    if(3.21 === "3.21"){ //N IMPRIME
        echo "Comparação verdadeira" . " , ";
    }

    //DIFERENÇA
    if(3.21 != 2){ 
        echo "São diferentes" . " , ";
    }
    //NÃO IDENTICO, DIFERE NO TIPO
    if(3.2 !== "3.2"){ 
        echo "Não são identicos" . " , ";
    }