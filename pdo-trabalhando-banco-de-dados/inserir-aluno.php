<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO(dsn: 'sqlite:' . $databasePath);

$student = new Student(
    null,
    "Walber' ''); DROP TABLE students; -- Gomes",
    new \DateTimeImmutable('2002-01-01')
);

$sqlInset = "INSERT INTO students (name, birth_date) VALUES (?, ?);";
$statement = $pdo->prepare($sqlInset);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo "Aluno incluído";
};
