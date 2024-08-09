<?php
class Filme {
    private $nome;
    private $diretor;
    public function __construct($nome, $diretor) {
        $this->nome = $nome;
        $this->diretor = $diretor;
}public function getTitulo() {
    return $this->nome;
}public function getAutor() {
    return $this->diretor;
}public function setTitulo($novoNome) {
    $this->nome = $novoNome;
}public function setAutor($novoDiretor) {
    $this->autor = $novoDiretor;
}public function exibirInfo() {
    echo "Filme: {$this->nome},
    Diretor: {$this->diretor}";
}}$filme = new Filme("Donnie Darko", "Richard Kelly");
$filme->show();
$filme->setNome("Novo título");
$filme->setDiretor("O novo autor");
$filme->show();
?>