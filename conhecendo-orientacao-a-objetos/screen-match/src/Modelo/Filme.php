<?php

class Filme
{
  private string $nome = 'Nome padrão';
  private int $anoLancamento = 2024;
  private string $genero = 'ação';
  private array $notas = [];

  // Demais métodos

  /**
   * Método getter, para podermos ler o ano de lançamento
   */
  public function anoLancamento(): int {
    return $this->anoLancamento;
  }

  /**
   * Método setter, para que possamos alterar o ano de lançamento
   */
  public function defineAnoLancamento(int $anoLancamento): void {
    $this->anoLancamento = $anoLancamento;
  }

  public function nome(): int {
    return $this->nome;
  }

  public function defineNome(int $nome): void {
    $this->nome = $nome;
  }

  public function genero(): int {
    return $this->genero;
  }

  public function defineGenero(int $genero): void {
    $this->genero = $genero;
  }
}
