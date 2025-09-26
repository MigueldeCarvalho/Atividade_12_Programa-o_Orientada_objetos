<?php

class ContaBancaria {
    public $titular;
    public $saldo;
    public $numeroConta;

    public function __construct($titular, $numeroConta, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor < 10) {
            echo "Depósito mínimo é R$10\n";
        } else {
            $this->saldo += $valor;
            echo "Depósito de R$$valor realizado com sucesso!\n";
        }
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente!\n";
        } else {
            $this->saldo -= $valor;
            echo "Saque de R$$valor realizado com sucesso!\n";
        }
    }

    public function mostrarSaldo() {
        return "Saldo atual: R$" . $this->saldo;
    }
}


$conta1 = new ContaBancaria("Diego", "12345", 2000);
$conta1->depositar(300); 
$conta1->depositar(400);
$conta1->sacar(200); 
$conta1->sacar(80);
echo $conta1->mostrarSaldo() . "\n";

?>