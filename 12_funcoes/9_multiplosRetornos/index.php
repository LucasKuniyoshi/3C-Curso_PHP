<?php
    function alteraDados($nome, $idade){
        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alteraDados("Lucas", 22);

    print_r($dados);

    echo " ";

    echo "Olá $dados[0], você tem $dados[1]";
        