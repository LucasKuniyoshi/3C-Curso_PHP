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

$humano1 = new Humano("Moacir", 25, "Gpuava", "@Moa");
$humano2 = new Humano("Sandro", 20, "Irati", "@Sandrin");
$humano3 = new Humano("Rapha", 23, "Murcia", "@Raphariga");

$a = new Animal("Pet", "réptil", 4, "verde", 0.65, "P", $humano1);
$a->falar();
echo $a->getDono() . "\n";
echo $a->getCor() . "\n";


$b = new Cachorro("Buti", "Chow chow", 4, "Laranja", 12.5, "M", $humano1);
$b->falar();

$c = new Gato("Safira", "Cinza", 4, "cinza", 4.5, "M", $humano1);
$c->falar();

$d = new Passaro("Loro", "José", 2, "Verde amarelado", 7.5, "G", $humano1);
$d->falar();

$e = new Vendedor("Lucas", 22, "CWB", "@Kuni");
echo $e->mostrarSalario() . "\n";

$e = new Balconista("Lucas", 22, "CWB", "@Kuni");
echo $e->mostrarSalario() . "\n";

$e = new Veterinario("Lucas", 22, "CWB", "@Kuni");
echo $e->mostrarSalario() . "\n";
echo "\n";

$venda1 = new Venda("Ração", $humano1);
echo "O cliente {$venda1->getHumano()} comprou o produto {$venda1->getProduto()} no valor de {$venda1->getvalorProduto()} reais \n";
array_push($ListaProduto, $venda1->getProduto());

$venda2 = new Venda("Coleira", $humano2);
echo "O cliente {$venda2->getHumano()} comprou o produto {$venda2->getProduto()} no valor de {$venda2->getvalorProduto()} reais \n";
array_push($ListaProduto, $venda2->getProduto());

$venda3 = new Venda("Petisco", $humano3);
echo "O cliente {$venda3->getHumano()} comprou o produto {$venda3->getProduto()} no valor de {$venda3->getvalorProduto()} reais \n";
array_push($ListaProduto, $venda3->getProduto());

print_r($ListaProduto);