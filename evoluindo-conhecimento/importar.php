<?php

$caminhoDoArquivo = __DIR__ . "/filme.json";
$conteudoAquivoFilme = file_get_contents($caminhoDoArquivo);
$filme = json_decode($conteudoAquivoFilme, true);

var_dump($filme);