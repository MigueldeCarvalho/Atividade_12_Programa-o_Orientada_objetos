<?php

class Aluno {
    public $nome;
    public $matricula;
    public $notas; 

    public function __construct($nome, $matricula, $notas) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->notas = $notas;
    }

    public function calcularMedia() {
        $media = array_sum($this->notas) / count($this->notas);
        if ($media < 5) {
            return "Média: $media - Reprovado";
        } else {
            return "Média: $media - Aprovado";
        }
    }
}


$aluno1 = new Aluno("Beatriz", "2025001", [7, 8, 6]);
echo $aluno1->calcularMedia() . "\n";

$aluno2 = new Aluno("Lucas", "2025002", [3, 4, 2]);
echo $aluno2->calcularMedia() . "\n";

?>