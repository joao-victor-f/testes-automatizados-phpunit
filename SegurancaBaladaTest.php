<?php
use PHPUnit\Framework\TestCase;

require_once './src/Pessoa.php';
require_once './src/SegurancaBalada.php';


class SegurancaBaladaTest extends TestCase
{
    public function testSegurancaNaoDeveDeixarMenorDeIdadeEntrar()
    {
        //Arrange
        $pessoa = $this->createStub(Pessoa::class);
        $pessoa->method('idade')->willReturn(17);

        $seguranca = new SegurancaBalada();

        //Act
        $deixouPessoaEntrar = $seguranca->deixaEntrar($pessoa);

        //Assert
        $this->assertTrue($deixouPessoaEntrar === false);
    }

    public function testSegurancaDeveDeixarPessoaMaiorDeIdadeEntrar()
    {
        //Arrange
        $pessoa = $this->createStub(Pessoa::class);
        $pessoa->method('idade')->willReturn(18);

        $seguranca = new SegurancaBalada();

        //Act
        $deixouPessoaEntrar = $seguranca->deixaEntrar($pessoa);

        //Assert
        $this->assertTrue($deixouPessoaEntrar === true);
    }
}