<?php

class Pessoa {

    // Atributo privado: não pode ser acessado diretamente
    private $nome;

    // Define o valor do atributo nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Retorna o valor do atributo nome
    public function getNome() {
        return $this->nome;
    }
}

?>