
<?php
//PARAMETRO DEFAULT
    function teste($a = "teste"){
        echo "O valor de A é: $a <br>";
    }
    teste();
    teste("assfd");

    function testando($b, $a = "x"){
        echo "O valor de a é: $a e de b é: $b <br>";
    }

    testando("1"); //$b recebe 1 e $a continua igual
    testando("1", "2");

    //Ex Cor do Carro
    function CorCarro($cor = "Prata"){
        return $cor;
    }
    echo "Cor do carro é " . CorCarro() . ".";
    
    $cor2 = CorCarro("Vermelho");
    echo "Cor do carro é $cor2. ";