<?php
    $str = "Estamos testando o método strpos, com ele podemos encontrar strings";

    $teste = strpos($str, "strpos");
    echo $teste . "\n"; //RETORNA O INDICE DE ONDE A PALAVRA TA


    //ENCONTRANDO A ÚLTIMA OCORRÊNCIA
    $str = "Estamos testando o método strrpos para teste, para encontrar a ultima string teste";

    $teste2 = strrpos($str, "teste");
    echo "$teste2 \n";

    //ACHANDO A PALAVRA E RETORNANDO ELA
    $p = substr($str, strpos($str, "teste"), 5);
    echo "$p \n";

    //RETORNANDO O RESTO DA STRING
    $str = "Tsetando o resto da string, pra ver se tra certo";
    $teste3 = strstr($str, "resto"); //IMPRIME DO "RESTO" EM DIANTE
    echo "$teste3 \n";