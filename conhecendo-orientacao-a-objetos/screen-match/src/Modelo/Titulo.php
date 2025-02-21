<?php

class Titulo
{
  private array $notas;

  // quando eu defino um modificador de acesso a alguma parâmetro no meu construtor,
  // esse parâmetro é promovido a propriedade
  // só funciona no construtor
  public function __construct(
    public readonly string $nome,
    public readonly int $anoLancamento,
    public readonly Genero $genero,
  ) {
    $this->notas = [];
  }

  public function avalia($nota): void
  {
    $this->notas[] = $nota;
  }

  public function media(): float
  {
    $somaNotas = array_sum($this->notas);
    $quantidadeNotas = count($this->notas);

    return $somaNotas / $quantidadeNotas;
  }

  public function duracaoEmMinutos(): int 
  {
    return 0;
  }
}
