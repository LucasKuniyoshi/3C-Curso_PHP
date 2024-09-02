<?php
    $arr = ["Sla", "sad", "dsfsdf", "Isso"];

    //JUNTA O VETOR NUMA STRING ÚNICA, POSSIBILITA SEPARÁ-LOS COMO QUEIRA
    $teste = implode(" - ", $arr);

    echo $teste;