<?php

require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = inluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = criaFilme(
    nome: "Thor: Ragnarok", 
    ano: 2021, 
    nota: 8.0, 
    genero: "super-herói"
);


var_dump($filme["ano"]);

var_dump($filme['nome']);

$posicaoDoisPontos = strpos($filme['nome'], ":");

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));

$filmeComoStringJson = json_encode(($filme));
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);