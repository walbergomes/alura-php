<?php
  // desafio
  // No arquivo que possui a mensagem de sucesso após exportar o arquivo, leia o arquivo exportado e exiba todas as informações do filme.
  
  $conteudoDoArquivo = file_get_contents('filme.json');
  $filme = json_decode($conteudoDoArquivo, true)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Filme: <?=$filme['nome']; ?> </h2>
  <p>Ano de Lançamento: <?=$filme['anoLancamento']; ?> </p>
  <p>Nota: <?=$filme['nota']; ?> </p>
  <p>Gênero: <?=$filme['genero']; ?> </p>
</body>
</html>