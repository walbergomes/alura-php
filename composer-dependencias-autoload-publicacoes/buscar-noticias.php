<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$response = $client->request(method: 'GET', uri: 'https://www.cnnbrasil.com.br/');

$html = $response->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter(selector: 'h3.block__news__title');

foreach ($cursos as $curso) {
    echo $curso->textContent . PHP_EOL;
}