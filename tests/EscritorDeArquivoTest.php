<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/EscritorDeArquivo.php';


class EscritorDeArquivoTest extends TestCase
{
    public function testConteudoArquivo()
    {
        //Arrange
        $caminhoArquivo = md5(time());
        $escritor = new EscritorDeArquivo($caminhoArquivo);

        //Act
        $escritor->escreve('Primeira linha');
        $escritor->escreve('Uma outra linha');

        //Assert
        $textoEscrito = 'Primeira linha
Uma outra linha
';
        $this->assertSame($textoEscrito, file_get_contents($caminhoArquivo));
    }
}