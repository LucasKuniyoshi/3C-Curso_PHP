<?php
    function Velo($a){
        If(is_int($a)){
            echo "A Velocidade Máx é de $a Km/h";
        }else{
            echo "Por favor digite um numero valido";
        }
    }

    Velo(120);

    $r = 400;
    Velo($r);

    //PHP ignora parametro desnecessárip
    Velo(250, "teste");

    //MAIS PARAMETROS
    function Animal($nome, $raca){
        echo "O $nome é da raça $raca .";
    }

    Animal("Bob", "Chow chow");