<?php
    //2. Sair
    /*function Sair(){
        return $signin = false;
    }*/

    //MAIN
    
    $maisUmProduto = 1;
    $i = 0; //pra usuarios
    $j = 0; //pra produtos
    $signin = true;

    while($signin){
        echo "1. Login" . "  ";
        echo "2. Sair" . "  ";
        $opcao = readline();

        if($opcao == 2 || $opcao == '2'){
            //Sair();
            break;
        }else if($opcao == 1 || $opcao == '1'){
            system('clear'); //system('cls') //LIMPA O TERMINAL

            echo "Informe seu nome de usuário: ";
            $nomeUsuario[$i] = readline();
            echo "Agora sua senha: ";
            $senhaUsuario[$i] = readline();

            if($nomeUsuario != NULL && $senhaUsuario != NULL){
                $menu = true;
                while($menu){
                    //system('clear');
                    echo "1.Vender  "; //Colocar tambem o valor total obtido nas vendas
                    echo "2.Cadastrar novo usuário  "; //mostrar usuario atual e perguntar 1. cadastrar novo usuário e 2. manter usuario (redireciona ele pra tela de menu)
                    echo "3.Verificar Log  ";
                    echo "4.Logout  ";
                    $opcao2 = readline();

                    switch($opcao2){
                        case 1:
                            //static $h = 2;
                            //echo $h;
                            for($j = 0; $maisUmProduto != 0 || $maisUmProduto != '0'; $j++){
                                echo "Nome do produto: ";
                                $nomeProduto[$j] = readline();
                                echo "Valor do produto: ";
                                $valorProduto[$j] = readline();
                                echo "Deseja inserir mais um produto? (1.SIM   0.NÂO)";
                                echo "\n";
                                $maisUmProduto = readline();
                            }
                            break;
                        case 2:
                            echo "Nome do novo usuário: ";
                            $nomeUsuario[$i+=1] = readline();
                            echo "Senha do novo usuário: ";
                            $senhaUsuario[$i+=1] = readline();
                            break;
                        case 3:
                            //$h = 3;
                            //echo $h;
                            echo "Usuário logado: " . $nomeUsuario[$i] . ". ";
                            echo "\n";
                            echo "\n"; 
                            for($k = 0; $k < count($nomeUsuario); $k++){     
                                for($n = 0; $n < count($nomeProduto); $n++){
                                    echo "O Usuário " . $nomeUsuario[$k] . " realizou a venda do produto " . $nomeProduto[$n] . " no valor de " . $valorProduto[$n] . " reais às " . date('d/m/Y H:i:s') . ".";
                                    echo "\n";
                                }                      
                            }
                            echo readline();
                            break;
                        case 4:
                            $menu = false;
                            break;
                        default:
                            echo "Selecione de 1 a 4 somente => ";
                    }
                    //$i++;
                    //$j++;
                }
            }
        }
    }
?>