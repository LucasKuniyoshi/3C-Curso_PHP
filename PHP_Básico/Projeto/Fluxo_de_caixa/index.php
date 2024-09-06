<?php
    //2. Sair
    /*function Sair(){
        return $signin = false;
    }*/
    function armazenaItem($id, $produto, $valor){
        $nomeItem = [$produto];
        $idUsuario = [$id];
        $valorItem = [$valor];
    }

    //MAIN
    $nomeItem = [];
    $idUsuario = [];
    $valorItem = [];
    
    $ValorTotal = 0;
    $maisUmProduto = 1;
    $confirmarUsuario = 0;
    $i = 0; //pra usuarios
    $j = 0; //pra produtos
    $p = 0;
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
                $usuarioLogado = [];
                while($menu){
                    //system('clear');
                    echo "1.Vender \n"; //Colocar tambem o valor total obtido nas vendas
                    echo "2.Cadastrar novo usuário \n"; //mostrar usuario atual e perguntar 1. cadastrar novo usuário e 2. manter usuario (redireciona ele pra tela de menu)
                    echo "3.Verificar Log  \n";
                    echo "4.Logout  \n";
                    echo "Valor total vendido: $ValorTotal reais.\n";
                    $opcao2 = readline();

                    switch($opcao2){
                        case 1:
                            //static $h = 2;
                            //echo $h;
                            array_push($usuarioLogado,end($nomeUsuario));
                            for($j = 0; $maisUmProduto != 0 || $maisUmProduto != '0'; $j++){
                                echo "Nome do produto: ";
                                $nomeProduto[$p] = readline();
                                echo "Valor do produto: ";
                                $valorProduto[$p] = readline();
                                //armazenaItem(end($nomeUsuario), $nomeProduto, $valorProduto);
                                $nomeItem[$p] = $nomeProduto[$p];
                                $idUsuario[$p] = end($nomeUsuario);
                                $valorItem[$p] = $valorProduto[$p];
                                $p++;
                                $ValorTotal += $valorProduto[$j];
                                echo "Deseja inserir mais um produto? (1.SIM   0.NÂO)";
                                echo "\n";
                                $maisUmProduto = readline();
                            }
                            $maisUmProduto = 1;
                            break;
                        case 2:
                            $confirmarUsuario = 0;
                            for($d = 1; $confirmarUsuario != 1 || $confirmarUsuario != '1'; $d++){
                                echo "Nome do novo usuário: ";
                                $nomeUsuario[$d] = readline();
                                echo "Senha do novo usuário: ";
                                $senhaUsuario[$d] = readline();
                                echo "\n";
                                echo "Confirma as alterações usuário " . $nomeUsuario[$d] . "? (1.SIM  0.NÂO)";
                                echo "\n";
                                $confirmarUsuario = readline();
                            }
                            array_push($usuarioLogado,end($nomeUsuario));
                            
                            break;
                        case 3:
                            //$h = 3;
                            //echo $h;
                            echo "Usuário logado: " . end($nomeUsuario) . ". ";
                            echo "\n";
                            echo "\n"; 
                            /*for($k = 0; $k < count($nomeUsuario); $k++){  
                                if($nomeUsuario[$k] == $usuarioLogado[$k]){
                                    for($n = 0; $n < count($nomeProduto); $n++){
                                        echo "O Usuário " . $nomeUsuario[$k] . " realizou a venda do produto " . $nomeProduto[$n] . " no valor de " . $valorProduto[$n] . " reais às " . date('d/m/Y H:i:s') . ".";
                                        echo "\n";
                                    }                      
                                }   
                            }*/
                            //print_r($nomeProduto);
                            for($n = 0; $n < count($nomeProduto); $n++){
                                echo "O Usuário " . $idUsuario[$n] . " realizou a venda do produto " . $nomeItem[$n] . " no valor de " . $valorItem[$n] . " reais às " . date('d/m/Y H:i:s') . ".";
                                echo "\n";
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