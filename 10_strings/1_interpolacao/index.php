<?php
    //INTERPOLAÇÃO
    $idade = 29;

    echo "Eu tenho $idade ou {$idade}";

    //VALORES DE ESCAPE
    //AVISA AO NAVEGADOR Q O DOCUMENTO DA PAGINA É SOMENTE TXT
    header("Content-type: text/plain");

    //Pular linha
    echo "\n";

    //TAB
    echo "\t";

    //BARRA INVERTIDA
    echo "\\"; // => "\"

    //DÓLAR
    echo "\$";