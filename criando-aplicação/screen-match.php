<?php

echo "Bem vindo ao Screen Match!";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = $argv[1] ?? 2022;

$somaDeNotas = 8.8 + 9 + 4 + 7 + 7.7;
$notaFilme = $somaDeNotas / 5;

$planoPrime = false;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n"; 
echo "Nota do filme $notaFilme \n";
echo "Ano de lançamento $anoLancamento \n"; 