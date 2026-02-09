<?php

/* Model */
require 'dados.php';

$id = $_REQUEST['id'];


//Criamos uma varivel que esta utilizando o array_filter que verifica se existe um id igual e se existir retorna o mesmo
$filtroLivro = array_filter($livros, function ($l) use ($id) {

    return $l['id']  == $id;
});
$livro = array_pop($filtroLivro);

$view = "livro";

require 'views/templates/app.view.php';





?>