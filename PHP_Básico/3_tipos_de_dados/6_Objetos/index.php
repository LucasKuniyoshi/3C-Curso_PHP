<?php

    class Pessoa{
        function falar(){
            echo "Olá pessoal";
        }
    }

    $lucas = new Pessoa;

    $lucas->nome = "Lucas"; //DEFINFINDO ATRIBUTO
    echo $lucas->nome;

    ECHO "<br>";

    $lucas->falar(); //CHAMANDO FUNCAO

    //NULL
    echo NULL;

    $nome = NULL;
    if(is_null($nome)){
        echo "O valor é nulo";
    }

    $nome = "Lucas"; //NÃO É MAIS NULO

    if(is_null($nome)){
        echo "O valor é nulo";
    }