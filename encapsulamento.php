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

// Criando um objeto da classe Pessoa
$pessoa = new Pessoa();

// Definindo o nome através do método setNome()
$pessoa->setNome("João");

// Exibindo o nome através do método getNome()
echo $pessoa->getNome();

?>