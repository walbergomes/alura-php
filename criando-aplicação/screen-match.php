<?php

echo "Bem vindo ao Screen Match!
";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$somaDeNotas = 8.8 + 9 + 4 + 7 + 7.7;
$notaFilme = $somaDeNotas / 5;

$planoPrime = false;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;


echo $notaFilme;