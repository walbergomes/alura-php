<?php

echo "Bem vindo ao Screen Match!";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor Ragnarock";
$nomeFilme = "Se beber não case";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
  $notas[] = (float) $argv[$contador];
}

$somaDeNotas = 0;

for($i = 0; $i < count($notas); $i++) {
  $somaDeNotas += $notas[$i];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;

$planoPrime = false;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n"; 
echo "Nota do filme $notaFilme \n";
echo "Ano de lançamento $anoLancamento \n"; 

// match é exclusivo do php
$genero = match($nomeFilme) {
  "Top Gun - Maverick" => "ação",
  "Se beber não case" => "comédia",
  "Thor Ragnarock" => "super-herói",
  default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero \n";
