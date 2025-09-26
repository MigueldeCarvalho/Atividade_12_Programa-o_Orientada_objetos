<?php

class AgendaContato {
    public $nome;
    public $telefone;
    public $email;

    public function __construct($nome, $telefone, $email) {
        if (!$this->validarTelefone($telefone)) {
            throw new Exception("Telefone inválido! Deve ter 10 ou 11 dígitos.");
        }
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function exibirContato() {
        return "Nome: {$this->nome}, Telefone: {$this->telefone}, Email: {$this->email}";
    }

    public function atualizarTelefone($novoTelefone) {
        if ($this->validarTelefone($novoTelefone)) {
            $this->telefone = $novoTelefone;
            echo "Telefone atualizado com sucesso!\n";
        } else {
            echo "Telefone inválido! Deve ter 10 ou 11 dígitos.\n";
        }
    }

    private function validarTelefone($telefone) {
        return preg_match('/^\d{10,11}$/', $telefone);
    }
}

$contato1 = new AgendaContato("Carlos", "4674329701", "carlos@email.com");
echo $contato1->exibirContato() . "\n";
$contato1->atualizarTelefone("4674329701"); 
$contato1->atualizarTelefone("123456789"); 
echo $contato1->exibirContato() . "\n";
?>