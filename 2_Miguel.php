<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function __construct($marca, $modelo, $ano) {
        $anoAtual = date("Y");
        if ($ano < 1800 || $ano > $anoAtual) {
            throw new Exception("Ano inválido para o carro!");
        }
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirInfo() {
        return "Carro: {$this->marca} {$this->modelo}, Ano: {$this->ano}";
    }
}

$carro1 = new Carro("Chevrolet", "Prisma",  2010);
echo $carro1->exibirInfo() . "\n";

?>