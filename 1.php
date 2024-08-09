<?php

class Livro {
    private $title;
    
    
    private $autor;

    public function __construct($title, $autor) {
        $this->title = $title;
        $this->autor = $autor;
}

public function getTitle() {
    
    return $this->title;
}
public function getAutor() {
    
    
    return $this->autor;
}

public function show() {

    echo "Livro: {$this->title},
    
    Criador da obra: {$this->aut}";
    
    }
}

$livro = new Livro("A hora da estrela", "Clarice Lispector");









$livro -> show();

?>