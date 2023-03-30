<?php

require_once 'Pessoa.php';

//Arrange
$pessoa = new Pessoa('Víctor', new DateTimeImmutable('2005-11-14'));

//Act
$idade = $pessoa->idade();

//Assert
$idadeEsperada = 17;

if ($idadeEsperada === $idade) {
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}