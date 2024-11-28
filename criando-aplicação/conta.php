<?php

$titular = "Vinícius Dias";
$saldo = 1000;

echo "***********************\n";
echo "Titular: $titular \n";
echo "Saldo atual: R$ $saldo \n";
echo "***********************\n";


do {

  echo "1. Consultar saldo atual \n";
  echo "2. Sacar valor \n";
  echo "3. Depositar valor \n";
  echo "4. Sair \n";

  echo "***********************\n";

  $opcaoSelecionada = (float) fgets(STDIN);

  switch ($opcaoSelecionada) {
    case 1:
      echo "Saldo atual: R$ $saldo \n";
      echo "***********************\n";
      break;
    case 2:
      $valorSacado = (float) fgets(STDIN);

      if ($valorSacado >= $saldo) {
        echo "O valor que deseja sacar é maior que seu saldo \n";
        echo "***********************\n";
      } else {
        $saldo -= $valorSacado;
      }
      break;
    case 3:
      $valorDepositado = (float) fgets(STDIN);
      $saldo += $valorDepositado;
      break;
    case 4:
      echo "saindo... \n";
      echo "***********************\n";
      return;
    default:
      echo "Opção inválida \n";
      echo "***********************\n";
  }
} while ($opcaoSelecionada !== 4);
