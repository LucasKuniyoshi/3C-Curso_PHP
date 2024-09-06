<?php
    $pessoa = ["Lucas", 29, "Programador", "verde"];

    print_r($pessoa);
    echo "\n";

    list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

    echo "$nome \n";
    echo "$idade \n";
    echo "$profissao \n";
    echo "$corDosOlhos \n";
    echo "\n\n";

    //EX
    $carro = ["Jaguar", 3.0, "Azul", 18, "Teto solar", "Automático"];

    list($marca, $motor, $cor, $aro, $opcional, $cambio) = $carro;

    echo "$marca \n";
    echo "$motor \n";
    echo "$cor \n";
    echo "$aro \n";
    echo "$opcional \n";
    echo "$cambio \n";