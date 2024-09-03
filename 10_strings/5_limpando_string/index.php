<?php
    $str1 = "  Lucas  ";
    echo "Esta é a string 1: $str1. \n";

    $str1Limpa = trim($str1);
    echo "Esta é a string 1: $str1Limpa. \n";

    $str1Limpa2 = rtrim($str1);
    echo "Esta é a string 1: $str1Limpa2. \n";

    //ALTERANDO O CASE
    echo strtoupper($str1);//MAIUSCULA

    echo strtolower($str1);//MINUSCULA

    echo ucfirst($str1);//1a letra maiuscula
    echo ucwords($str1);//1a de cada palavra da frase fica maiuscula

    //REMOVENDO TAGS HTML
    $textoHtml = "<p>Testandooooo esse parágrafo</p>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml);
    //AGORA N APARECE MAIS AS <p></p>
    echo $salvarTextoBanco;