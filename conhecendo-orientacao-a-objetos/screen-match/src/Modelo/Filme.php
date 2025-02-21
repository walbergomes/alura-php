<?php

class Filme extends Titulo
{
  public function __construct(
    string $nome,
    int $anoLancamento,
    Genero $genero,
    public readonly int $duracaoEmMinutos,
  ) {
    // A palavra reservada parent permite o acesso de métodos da classe base/mãe
    parent::__construct($nome, $anoLancamento, $genero);
  }

  public function duracaoEmMinutos(): int
  {
    return $this->duracaoEmMinutos;
  }
}
