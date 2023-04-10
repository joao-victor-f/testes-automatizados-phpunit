<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Pessoa.php';
require_once __DIR__ . '/../src/ExportadorDePessoaEmXml.php';

class ExportadorDePessoaEmXmlTest extends TestCase
{
    public function testExportarPessoaEmXmlDeveFuncionar()
    {
        //Arrange
        $pessoa = $this->createStub(Pessoa::class);
        $pessoa->method('nome')->willReturn('Víctor');
        $pessoa->method('idade')->willReturn(17);

        $exportador = new ExportadorDePessoaEmXml($pessoa);

        //Act
        $xml = $exportador->exportaEmXml();

        //Assert
$conteudoEsperado = "
            <pessoa>
                <nome>Víctor</nome>
                <idade>17</idade>
            </pessoa>
        ";


        $this->assertSame($conteudoEsperado, $xml);
    }
}
