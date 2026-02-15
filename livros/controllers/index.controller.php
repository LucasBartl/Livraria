<?php
/* Model */
$search = $_REQUEST['search'] ?? '';

$livros = $database->query(
    query: "select * from livros where titulo like :filtro ",
    class: livro::class,
    params: ['filtro' => "%$search%"]
)->fetchAll();
view('index', compact('livros'));
