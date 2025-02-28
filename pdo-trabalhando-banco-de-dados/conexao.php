<?php

$caminhoBanco = __DIR__ . '/banco.sqlite2';
$pdo = new PDO(dsn: 'sqlite:' . $caminhoBanco);

echo 'Conectei';