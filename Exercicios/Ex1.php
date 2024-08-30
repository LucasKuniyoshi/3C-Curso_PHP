<?php
    //Quociente e Resto
    /*$a = readline();
    $b = readline();

    $op1 = $a / $b;
    $op2 = $a % $b;

    echo "$op1 , ";
    echo $op2;*/

    //Media ponderada
    /*$a = readline();
    $b = readline();
    $c = readline();
    $d = readline();

    $op1 = ((1*$a) + (2*$b) + (3*$c) + (4*$d))/(1+2+3+4);

    echo "$op1 . ";*/

    //REAJUSTE DE 1%
    /*$a = readline();

    $op1 = $a + $a* 0.01;

    echo "$op1 . ";*/

    //QuiloWatts
    /*$salarioMinimo = 1400;
    $QtdeWatts = 152;

    $CemKws = $salarioMinimo/7;
    $ValorWatts = $CemKws / 100;
    
    echo "Valor de cada Kws: $ValorWatts , ";
    echo "Valor a ser pago: " . ($ValorWatts * $QtdeWatts) . " , ";
    $desconto = ($ValorWatts * $QtdeWatts) - (($ValorWatts * $QtdeWatts)*0.1);
    echo "Valor de a ser pago com desconto: $desconto, ";*/

    //RETÂNGULO
    /*$base = readline();
    $altura= readline();

    $perimetro = (2*$base) + (2*$altura);
    $area = $base * $altura;
    $diagonal = sqrt(($base ** 2) + ($altura ** 2));

    echo "Perimetro:" . $perimetro . " , ";
    echo "Area:" . $area . " , ";
    echo "Diagonal:" . $diagonal . " , ";*/

    /*//TRIANGULO
    $base = readline();
    $altura= readline();

    $area = ($base * $altura) / 2;

    echo "Area:" . $area . " , ";*/

    /*//Losando
    $D = readline();
    $d= readline();

    $area = ($D * $d) / 2;

    echo "Area:" . $area . " , ";*/

    /*//DECIMAL
    $n = readline();
    $d= readline();

    $op = $n / $d;

    echo "Area:" . $op . " , ";*/

    //CARROS
    $vendedor = ["3", 150000, 1500, 1000];
    $porcentagemDaVenda = ($vendedor[1] * 0.05);
    $salario = $vendedor[2] + $vendedor[3] + $porcentagemDaVenda;
    print_r($salario);
    //print_r($vendedor[2]);