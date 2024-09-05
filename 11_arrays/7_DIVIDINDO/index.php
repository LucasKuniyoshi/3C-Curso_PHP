<?php
    //CHUNK => DIVIDE O ARRAY EM SUBARRAYS DE TAMANHO 4
    $arr = range(1, 20);

    print_r(array_chunk($arr, 4));
    echo '\n';


    //CHAVES E VALORES
    $carro = [
        'marca' => 'BMW',
        'motor' => '2.4',
        'teto_solar' => true,
        'cambio' => 'Manual',
        'portas' => 4
    ];
    //RETORNA AS CHAVES/"titulos" DAQUELE ARRAY, NORMALMENTE PARA ENCONTRAR DADOS QUANDO VEM DO BANCO
    $chaves = array_keys($carro);

    print_r($chaves);
    echo "\n";

    //RETORNA OS VALORES DAQUELE ARRAY
    $valores = array_values($carro);

    print_r($valores);
    echo "\n";

    //VERIFICANDO SE O VALOR DA CHAVE EXISTE
    $arr = [
        'nome' => 'Lucas',
        'idade' => '22'
    ];
    //existe
    if(array_key_exists("nome", $arr)){
        echo "A chave existe \n";
    }else{
        echo "A chave n existe \n";
    }
    //n existe
    if(array_key_exists("profissao", $arr)){
        echo "A chave existe \n";
    }else{
        echo "A chave n existe \n";
    }

    //Mesma coisa do array_key_exists
    if(isset($arr['teste'])){
        echo "A chave existe ISSET \n";
    }else{
        echo "A chave n existe ISSET \n";
    }
    //PODE SER USADO PARA VARIÁVEIS TBM
    if(isset($x)){
        echo "A variaval existe ISSET \n";
    }else{
        echo "A variaval n existe ISSET \n";
    }