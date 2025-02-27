<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

use Alura\BuscadorDeNoticias\Buscador;

$client = new Client(['base_uri' => 'https://www.cnnbrasil.com.br/']);
$crawler = new Crawler();


$buscador = new Buscador($client, $crawler);
$noticias = $buscador->buscar('/');

foreach ($noticias as $noticia) {
    echo $noticia . PHP_EOL;
}