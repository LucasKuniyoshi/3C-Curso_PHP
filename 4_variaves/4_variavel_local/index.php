<?php
    //LOCAL x GLOBAL
    $x = 10;
    echo "$x global <br>";

    function teste(){
        $x = 5;
        echo "$x local <br>";
    }

    teste();

    function testando(){
        $x = 12;
        echo "$x local 2";
    }

    $x = 99;

    testando();

    teste();
    echo "$x global <br>";