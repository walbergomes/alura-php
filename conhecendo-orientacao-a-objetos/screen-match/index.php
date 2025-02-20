<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo ao ScreenMatch\n";

$filme = new Filme();
$filme->defineAnoLancamento(2022);
/*$filme->nome = "Thor - Ragnarok";
$filme->anoLancamento = 2022;
$filme->genero = "super-heroi"; */

$filme->avalia(10);
$filme->avalia(7);
$filme->avalia(6.5);
$filme->avalia(7.2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento();