<?php

require_once "animal.php";
require_once "cachorro.php";
require_once "gato.php";
require_once "passaro.php";

require_once "humano.php";
require_once "funcionario.php";
require_once "vendedor.php";

$f = new Humano("Moacir", 25, "Gpuava", "@Moa");

$a = new Animal("Pet", "réptil", 4, "verde", 0.65, "P", $f);
$a->falar();
echo $a->getDono();
echo $a->getCor() . "\n";


// $b = new Cachorro("Buti", "Chow chow", 4, "Laranja", 12.5, "M");
// $b->falar();

// $c = new Gato("Safira", "Cinza", 4, "cinza", 4.5, "M");
// $c->falar();

// $d = new Passaro("Loro", "José", 2, "Verde amarelado", 7.5, "G");
// $d->falar();

// $e = new Vendedor("Lucas", 22, "CWB", "@Kuni");
// echo $e->mostrarSalario();



