<?php

$arquivoCursos = new SplFileObject('cursos.csv', 'r');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo utf8_decode($linha[0]) . PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/y');