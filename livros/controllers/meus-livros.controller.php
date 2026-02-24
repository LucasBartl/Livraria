<?php
if(!auth()){
    header('location: /');
    exit();
}

$livros = livro::meus(auth()->id);


view('meus-livros', compact('livros'));