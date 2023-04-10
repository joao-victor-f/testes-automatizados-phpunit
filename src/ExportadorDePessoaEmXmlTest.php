<?php
use PHPUnit\Framework\TestCase;

require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXml.php';

class ExportadorDePessoaEmXmlTest extends TestCase
{
    public function testExportarPessoaEmXmlDeveFuncionar()
    {
        //Arrange
        $pessoa = new class extends Pessoa {
            public function __construct()
            {
            }

            public function idade(): int
            {
                return 17;
            }

            public function nome(): string
            {
                return 'Víctor';
            }
        };

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
