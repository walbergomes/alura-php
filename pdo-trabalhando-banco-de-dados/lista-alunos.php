<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * from students');
$studentList = $statement->fetchAll();

echo $studentList[0]['name'];