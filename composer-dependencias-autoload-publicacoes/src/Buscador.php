<?php

namespace Alura\BuscadorDeNoticias;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var Crawler
     */
    private $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {
        $resposta = $this->httpClient->request('GET', $url);

        $html = $resposta->getBody();

        $this->crawler->addHtmlContent($html);

        $elementosNoticias = $this->crawler->filter('h3.block__news__title');
        $noticias = [];

        foreach ($elementosNoticias as $elemento) {
            $noticias[] = $elemento->textContent;
        }

        return $noticias;
    }
}
