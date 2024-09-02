<?php
    // Ex1 
    // $a = readline();
    // if($a > 10){
    //     echo "É maior q 10";
    // } else{
    //     echo "Não é maior q 10";
    // }

    //Ex 2
    // $a = readline();
    // if($a >= 0){
    //     echo "É positivo";
    // } else{
    //     echo "É negativo";
    // }

    //Ex 3
    // $a = readline();
    // if($a < 12){
    //     $a = $a  * 1.30;
    //     echo "Valor das maças compradas: " . $a . " ";
    // }else{
    //     $a * 1;
    //     echo "Valor das maças compradas: " . $a . " ";
    // }

    //Ex 4
    // $a1 = 5; //readline()
    // $a2 = 4;
    // $media = ($a1 + $a2) / 2;

    // if($media >= 6){
    //     echo "Aprovado";
    // } else{
    //     echo "Reprovado";
    // }

    //Ex 5
    // $ano = 2000; //readline()
    // $idade = 2024 - $ano;

    // if($idade >= 16){
    //     echo "Já pode votar <br>";
    //     if($idade >= 18){
    //         echo "Já pode Dirigir";
    //     }
    // }

    //Ex 6
    // $a = 3;
    // $b = 5;

    // if($a != $b && $a > $b){
    //     echo "A: $a é maior";
    // } else{
    //     echo "B: $b é maior";
    // }

    //Ex 7
    // $nadadorIdade = 12; //readline()

    // if($nadadorIdade >= 5 && $nadadorIdade <= 7){
    //     echo "Categoria: Infantil A";
    // }
    // if($nadadorIdade >= 8 && $nadadorIdade <= 10){
    //     echo "Categoria: Infantil B";
    // }
    // if($nadadorIdade >= 11 && $nadadorIdade <= 13){
    //     echo "Categoria: Juvenil A";
    // }
    // if($nadadorIdade >= 14 && $nadadorIdade <= 17){
    //     echo "Categoria: Juvenil B";
    // }
    // if($nadadorIdade >= 18){
    //     echo "Categoria: Sênior";
    // }

    //Ex 8
    // $prod1 = 150;
    // $codigo = 4;

    // if($codigo == 1){
    //     $op = $prod1 - $prod1 * 0.1;
    //     echo "Valor a vista em dinheiro de R$: $op e com 10% de desconto. <br>";
    // }
    // if($codigo == 2){
    //     $op = $prod1 - $prod1 * 0.05;
    //     echo "Valor a vista no cartão de R$: $op e com 5% de desconto. <br>";
    // }
    // if($codigo == 3){
    //     $op2 = ($prod1/2);
    //     echo "Valor em duas vezes de R$: $op2. <br>";
    // }
    // if($codigo == 4){
    //     $op1 = $prod1 * 0.1;
    //     $op2 = ($prod1 - $op1)/3;
    //     echo "Valor em tres vezes de R$: $op2 e com 10% de desconto <br>";
    // }

    //Ex 9
    // $a = 1304;
    // if($a >= 30 && $a <= 90){
    //     echo "$a esta entre 30 e 90 <br>";
    // } else if($a >= 120){
    //     echo "$a está acima de 120";
    // } else{
    //     echo "O valor n se encaixa nessas condições";
    // }

    //Ex 10
    $valorCompra = 35;

    if($valorCompra < 20){
        $valorCompra = $valorCompra - ($valorCompra * 0.45);
        echo "Preço de venda R$: $valorCompra <br>";
    } else {
        $valorCompra = $valorCompra - ($valorCompra * 0.30);
        echo "Preço de venda R$: $valorCompra <br>";
    }