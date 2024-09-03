<?php
    //2. Sair
    function Sair(){
        return $signin = false;
    }

    //MAIN
    $nomeUsuario = [];
    $senhaUsuario = [];
    $nomeProduto = [];
    $valorProduto = [];

    $i = 0; //pra usuarios
    $j = 0; //pra produtos
    $signin = true;

    while($signin){
        echo "1. Login";
        echo "2. Sair";
        $opcao = readline();

        if($opcao == 2 || $opcao == '2'){
            Sair();
        }else if($opcao == 1 || $opcao == '1'){
            system('clear'); //system('cls') //LIMPA O TERMINAL

            echo "Informe seu nome de usuário:"
            $nomeUsuario[$i] = readline();
            echo "Agora sua senha:"
            $senhaUsuario[$i] = readline();

            if($nomeUsuario != NULL && $senhaUsuario != NULL){
                $menu = true;
                while($menu){
                    echo "1. Vender"; //Colocar tambem o valor total obtido nas vendas
                    echo "2. Cadastrar novo usuário"; //mostrar usuario atual e perguntar 1. cadastrar novo usuário e 2. manter usuario (redireciona ele pra tela de menu)
                    echo "3. Verificar Log";
                    echo "4. Logout";
                    $opcao2 = readline();

                    switch($opcao2){
                        case 1:
                            echo "Nome do produto:";
                            $nomeProduto = readline();
                            echo "Valor do produto:";
                            $valorProduto = readline();
                            break;
                        case 2:
                            echo "Nome do novo usuário:";
                            $nomeUsuario[$i+1] = readline();
                            echo "Senha do novo usuário:";
                            $senhaUsuario[$i+1] = readline();
                            break;
                        case 3:
                            echo "Usuário logado: " . $nomeUsuario[$i] . ". ";
                            echo "<br>";
                            echo "<br>";
                            echo "O Usuário " . $nomeUsuario[$i] . "realizou a venda do produto " . $nomeProduto[$j] . "no valor de " . $valorProduto[$j] . " reais às " . date('d/m/Y H:i:s') . ".";
                            break;
                        case 4:
                            $menu = false;
                            break;
                        default:
                            echo "Selecione de 1 a 4 somente";
                    }
                }
            }
            $i++;
        }
    }
?>