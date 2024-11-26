<?php

// "\n" faz uma quebra de linha na string e "\t" faz uma tab na string
echo "Bem vindo ao Screen Match!";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$somaDeNotas = 8.8 + 9 + 4 + 7 + 7.7;
$notaFilme = $somaDeNotas / 5;

$planoPrime = false;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;


// usar aspas duplas em php, ele tenta interpretar o que há dentro dela
// como no caso da variável $notaFilme dentro da string
// e no caso do \n 

// aspas simples não permite isso, só imprime o que vai estar lá dentro
echo "Nome do filme: " . $nomeFilme . "\n"; 
echo "Nota do filme $notaFilme \n";

// dessa forma abaixo, aí já seria possível
echo 'texto' . "\n ";