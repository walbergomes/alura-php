<?php

class Filme
{
  private array $notas;

  // quando eu defino um modificador de acesso a alguma parâmetro no meu construtor,
  // esse parâmetro é promovido a propriedade
  // só funciona no construtor
  public function __construct( 
    private string $nome,
    private int $anoLancamento,
    private string $genero
  ) {
   $this->notas = [];
  }
  
  // Método getter
  public function anoLancamento(): int {
    return $this->anoLancamento;
  }

  public function nome(): int {
    return $this->nome;
  }

  public function genero(): int {
    return $this->genero;
  }

  // ----
  public function avalia($nota) {
    $this->notas[] = $nota; 
  }

  public function media() : float {
    $somaNotas = array_sum($this->notas);
    $quantidadeNotas = count($this->notas);

    return $somaNotas / $quantidadeNotas;
  }

}
