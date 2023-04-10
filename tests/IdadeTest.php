<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Pessoa.php';

class IdadeTest extends TestCase
{
    public function testIdadeDeveRetornar17()
    {
        //Arrange
        $pessoa = new Pessoa('Víctor', new DateTimeImmutable('2005-11-14'));

        //Act
        $idade = $pessoa->idade();

        //Assert
        $idadeEsperada = 17;

        $this->assertSame($idadeEsperada, $idade);
    }
}