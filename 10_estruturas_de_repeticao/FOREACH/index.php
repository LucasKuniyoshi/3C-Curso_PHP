<?php
    //FOREACH
    $nomes = ["Matheus", "João", "Pedro", "Lucas"];

    $a = 10; 

    foreach($nomes as $nome){
        echo "O nome do índice atual é $nome , ";
        if($nome == "Matheus"){
            echo "Opa $a . "; 
        }
    }