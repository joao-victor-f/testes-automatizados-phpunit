<?php

class ExportadorDePessoaEmXml
{
    private Pessoa $pessoa;

    public function __construct(Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function exportaEmXml(): string
    {
        return "
            <pessoa>
                <nome>{$this->pessoa->nome()}</nome>
                <idade>{$this->pessoa->idade()}</idade>
            </pessoa>
        ";
    }
}