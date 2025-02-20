<?php

class Filme {
  private string $nome = "Nome padrão";
  private int $anoLancamento = 2024;
  private string $genero = "ação";
  private array $notas = [];

  public function avalia(float $nota) : void {
    $this->notas[] = $nota;
  }

  public function media() : float {
    $somaNotas = array_sum($this->notas);
    $quantidadeNotas = count($this->notas);

    return $somaNotas / $quantidadeNotas;
  }

  // Método Assessor - GETTER
  public function anoLancamento() : int {
    return $this->anoLancamento;
  }
  
  // Método Assessor - SETTER
  public function defineAnoLancamento(int $anoLancamento) {
    $this->anoLancamento = $anoLancamento;
  }


}
