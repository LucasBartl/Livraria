<?php
if(!auth()){
    header('location: /');
    exit();
}

$livros = $database->query(
    query:"select * from livros where usuario_id = :id ",
    class: livro::class,
    params:['id'=> auth()->id]
);


view('meus-livros', compact('livros'));