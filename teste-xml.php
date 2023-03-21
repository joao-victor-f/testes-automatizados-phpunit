<?php

require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXml.php';

//Arrange
$pessoa = new Pessoa('Víctor', new DateTimeImmutable('2005-11-14'));
$exportador = new ExportadorDePessoaEmXml($pessoa);

//Act
$xml = $exportador->exportaEmXml();

//Assert
$conteudoEsperado = '<pessoa><nome>Víctor</nome><idade>17</idade></pessoa>'; #TESTE OK

if ($conteudoEsperado === $xml) {
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}