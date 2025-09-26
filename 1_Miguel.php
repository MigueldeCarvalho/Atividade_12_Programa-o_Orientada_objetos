<?php

class Livro {
    public $titulo;
    public $autor;
    public $numeroPaginas;

    public function __construct($titulo, $autor, $numeroPaginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->numeroPaginas = $numeroPaginas;
    }

    public function classificarLivro() {
        if ($this->numeroPaginas <= 100) {
            return "Curto";
        } elseif ($this->numeroPaginas <= 300) {
            return "Médio";
        } else {
            return "Longo";
        }
    }
}

$livro1 = new Livro("Diário de um banana", "Jeff Kinney", 350);
echo "Livro: {$livro1->titulo} - Classificação: {$livro1->classificarLivro()}\n";

?>