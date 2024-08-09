<?php
class Pessoa {
    private $idade;
    private $nome;
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;

    }public function getNome() {
    return $this->nome;
}public function getIdade() {
    return $this->idade;
}public function setNome($novoNome) {
    $this->nome = $novoNome;
}public function setIdade($novaIdade) {
    $this->idade = $novaIdade;
}}
class Homem extends Pessoa {
    public function getIdade() {
        return "O homem possui " . parent::getIdade() . " anos";
    }
}
$homem = new Pessoa("Junior", 10);
echo $homem->getIdade()
?>