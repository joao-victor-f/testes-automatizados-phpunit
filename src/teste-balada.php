<?php

require_once 'Pessoa.php';
require_once 'SegurancaBalada.php';

//Arrange
$pessoa = new Pessoa('Víctor', new DateTimeImmutable('2005-11-14'));
$seguranca = new SegurancaBalada();

//Act
$deixouPessoaEntrar = $seguranca->deixaEntrar($pessoa);

//Assert
if ($deixouPessoaEntrar === true) {
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}