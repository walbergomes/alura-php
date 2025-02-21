<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem vindo ao ScreenMatch\n";

$filme = new Filme(
  'Thor - Ragnarok',
  2021,
  'super-heroi'
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(2);
$filme->avalia(2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento;