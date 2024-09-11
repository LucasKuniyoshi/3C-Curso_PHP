<?php

require_once "animal.php";
require_once "humano.php";
require_once "cachorro.php";

$a = new Animal;
$a->falar();

$joao = new Humano("João", 25, "Gpuava", "@joazin");

$buti = new Cachorro("Buti", "Chow chow", 4, "branca", 12, "M", $joao);
$buti->falar();
