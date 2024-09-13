<?php

    require_once "animal.php";
    require_once "cachorro.php";
    require_once "gato.php";
    require_once "passaro.php";

    require_once "humano.php";
    require_once "funcionario.php";
    require_once "vendedor.php";
    require_once "veterinario.php";
    require_once "balconista.php";

    require_once "venda.php";

    $ListaProduto = [];
    $signin = true;

    while($signin){
        echo "Escolha como desejar efetuar o login:\n1.Cliente  2.Funcionário  3.Sair\n";
        $login = readline();

        switch($login){
            case 1:
                //system('clear'); //system('cls') //LIMPA O TERMINAL
                $nome = readline("Digite seu nome: ");
                $idade = readline("Digite sua idade: ");
                $endereço = readline("Digite seu endereço: ");
                $contato = readline("Digite seu contato: ");
                $cliente = new Humano($nome, $idade, $endereço, $contato);

                echo "1. Cadastre seu Bichinho \n";
                echo "2. Comprar \n";
                echo "3. Voltar \n";
                $opcao1 = readline();

                while($opcao1 != 3 || $opcao1 != '3'){
                    switch($opcao1){
                        case 1: 
                            echo "Escolha o tipo de seu bichinho: \n";
                            echo "1. Cachorro \n";
                            echo "2. Gato \n";
                            echo "3. Pássaro \n";
                            echo "4. Outro animal \n";
                            echo "5. Voltar \n";
                            $opcao2 = readline();
    
                            while($opcao1 != 5 || $opcao1 != '5'){
                                $nomePet = readline("Nome de seu pet: ");
                                $raca = readline("Raça de seu pet: ");
                                $numPatas = readline("Numero de patas de seu pet: ");
                                $corPet = readline("Cor de seu pet: "); 
                                $pesoPet = readline("Peso de seu pet: "); 
                                $tamanhoPet = readline("Tamanho de seu pet: ");
        
                                switch($opcao2){
                                    case 1: 
                                        $cachorro = new Cachorro($nomePet, $raca, $numPatas, $corPet, $pesoPet,$tamanhoPet, $cliente);
                                        echo "O cliente {$cachorro->getDono()} realizou o cadastro do pet {$cachorro->getNomePet()} \n";
                                        break;
                                    case 2: 
                                        $gato = new Gato($nomePet, $raca, $numPatas, $corPet, $pesoPet, $tamanhoPet, $cliente);
                                        echo "O cliente {$gato->getDono()} realizou o cadastro do pet {$gato->getNomePet()} \n";
                                        break;
                                    case 3: 
                                        $passaro = new Passaro($nomePet, $raca, $numPatas, $corPet, $pesoPet, $tamanhoPet, $cliente);
                                        echo "O cliente {$passaro->getDono()} realizou o cadastro do pet {$passaro->getNomePet()} \n";
                                        break;
                                    case 4: 
                                        $outroAnimal = new Animal($nomePet, $raca, $numPatas, $corPet, $pesoPet, $tamanhoPet, $cliente);
                                        echo "O cliente {$outroAnimal->getDono()} realizou o cadastro do pet {$outroAnimal->getNomePet()} \n";
                                        break;
                                    default:
                                        echo "Escolha somente entre os valores de 1 a 4 !!!"; 
                                }
                            }
                            break;
                        case 2: 
                            echo "Escolha o que deseja comprar: \n";
                            echo "1. Ração \n";
                            echo "2. Coleira \n";
                            echo "3. Petisco \n";
                            $opcaoProduto = readline();
    
                            switch($opcaoProduto){
                                case 1:
                                    echo "A ração custa 79.89 reais, confirmar compra?";
                                    $confirmar1 = readline("1.Sim  0.Não");
                                    if($confirmar1){
                                        $vendaProduto = new Venda("Ração", $cliente);
                                        echo "O cliente {$vendaProduto->getHumano()} comprou {$vendaProduto->getProduto()}";
                                        array_push($ListaProduto, $vendaProduto->getProduto());
                                    }else{
                                        echo "Retornando para a tela de Comprar...";
                                    }
                                    break;
                                case 2:
                                    echo "A coleira custa 32.90 reais, confirmar compra?";
                                    $confirmar1 = readline("1.Sim  0.Não");
                                    if($confirmar1){
                                        $vendaProduto = new Venda("Coleira", $cliente);
                                        echo "O cliente {$vendaProduto->getHumano()} comprou {$vendaProduto->getProduto()}";
                                        array_push($ListaProduto, $vendaProduto->getProduto());
                                    }else{
                                        echo "Retornando para a tela de Comprar...";
                                    }
                                    break;
                                case 3:
                                    echo "O petisco custa 12.50 reais, confirmar compra?";
                                    $confirmar1 = readline("1.Sim  0.Não");
                                    if($confirmar1){
                                        $vendaProduto = new Venda("Ração", $cliente);
                                        echo "O cliente {$vendaProduto->getHumano()} comprou {$vendaProduto->getProduto()}";
                                        array_push($ListaProduto, $vendaProduto->getProduto());
                                    }else{
                                        echo "Retornando para a tela de Comprar...";
                                    }
                                    break;
                                default:
                                    echo "Escolha somente entre os valores de 1 a 3 !!!"; 
                            }
                            break;
                        default:
                            echo "Escolha somente entre os valores 1 e 2 !!!"; 
                    }
                }   
                break;
            case 2:
                echo "Perfil exclusivo para funcionário, informe a senha admin: \n";
                $senhaAdmin = readline();

                if($senhaAdmin == "123"){
                    //cadastro funcionário
                    $nome = readline("Digite seu nome: ");
                    $idade = readline("Digite sua idade: ");
                    $endereço = readline("Digite seu endereço: ");
                    $contato = readline("Digite seu contato: ");

                    echo "Escolha seu cargo atual: \n";
                    echo "1. Vendedor \n";
                    echo "2. Balconista \n";
                    echo "3. Veterinário \n";
                    echo "4. Total de produtos vendidos \n";
                    echo "5. Voltar \n";
                    $opcao3 = readline();

                    while($opcao3 != 5 || $opcao3 != '5'){
                        switch($opcao3){
                            case 1: 
                                $vendedor = new Vendedor($nome, $idade, $endereço, $contato);
                                echo $vendedor->mostrarSalario() . "\n";
                            break;
                            case 2: 
                                $balconista = new Balconista($nome, $idade, $endereço, $contato);
                                echo $balconista->mostrarSalario() . "\n";
                            break;
                            case 3: 
                                $veterinario = new Veterinario($nome, $idade, $endereço, $contato);
                                echo $veterinario->mostrarSalario() . "\n";
                            break;
                            case 4: 
                                print_r($ListaProduto);
                            break;
                            default:
                            echo "Escolha somente entre os valores de 1 a 4 !!!"; 
                        }
                    }
                }else{
                    echo "Only employees allowed!!";
                }
                break;
            case 3:
                $signin = false;
                break;
            default:
            echo "Escolha somente entre os valores 1 e 2 !!!"; 
        }
    }