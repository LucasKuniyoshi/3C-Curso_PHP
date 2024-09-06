<?php
    $url = "http://www.horadecodar.com.br/usuarios/lucassantos?id=12&nome=Lucas";
    $arrayUrl = parse_url($url);

    print_r($arrayUrl);
    echo "\n";