<?php

    $x = 10;
    $y =& $x;

    echo $x;
    echo $y;

    $y = 15; //ALTERA AS DUAS VARIAVEIS - ALTERANDO A REFERENCIA
    echo "Atribuicao pos ref";
    echo $x;
    echo $y;

    $nome = "Lucas";
    $nome2 =& $nome;

    echo $nome;
    echo $nome2;

    $nome2 = "Kleber";

    echo $nome;
    echo $nome2;