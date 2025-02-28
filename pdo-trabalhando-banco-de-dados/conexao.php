<?php


echo 'Conectei';

$pdo->exec(statement: 'CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');