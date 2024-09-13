<?php
    $signin = true;

    while($signin){
        echo "Escolha como desejar efetuar o login:\n1.Cliente  2.Funcionário\n";
        $login = readline();

        switch($login){
            case 1:
                system('clear'); //system('cls') //LIMPA O TERMINAL
                $nome = readline("Digite seu nome: ");
                $idade = readline("Digite sua idade: ");
                $endereço = readline("Digite seu endereço: ");
                $contato = readline("Digite seu contato: ");

                echo "1. Cadastre seu Bichinho \n";
                echo "2. Comprar \n";
                $opcao1 = readline();

                switch($opcao1){
                    case 1: 
                        echo "Escolha o tipo de seu bichinho: \n";
                        echo "1. Cachorro \n";
                        echo "2. Gato \n";
                        echo "3. Pássaro \n";
                        echo "4. Outro animal \n";
                        $opcao2 = readline();

                        switch($opcao2){
                            case 1: 
                                $nomePet = readline("Nome de seu pet: ");
                                $raca = readline("Raça de seu pet: ");
                                $numPatas = readline("Numero de patas de seu pet: ");
                                $corPet = readline("Cor de seu pet: "); 
                                $pesoPet = readline("Peso de seu pet: "); 
                                $tamanhoPet = readline("Tamanho de seu pet: "); 
                                break;
                            case 2: 
                                break;
                            case 3: 
                                break;
                            case 4: 
                                break;
                        }
                        break;
                    case 2: 
                        echo "\n";
                        break;
                    default:
                        echo "Escolha somente entre os valores 1 e 2 !!!"; 
                }
                break;
            case 2:
                echo "Perfil exclusivo para funcionário, informe a senha admin: \n";
                $senhaAdmin = readline();

                if($senhaAdmin == "123"){
                    //cadastro funcionário
                }
                break;
            default:
            echo "Escolha somente entre os valores 1 e 2 !!!"; 
        }
        $signin = false;
    }