<?php
/* Model*/


$livro = $database->query(
    query:"select * from livros where id = :id ",
    class:livro::class,
    params:["id" => $_GET['id']]
)->fetch();

view('livro', compact('livro'));
