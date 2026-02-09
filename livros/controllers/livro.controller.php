<?php

/* Model =========> Nosso CONTROLADOR */

require 'dados.php';

$id = $_REQUEST['id'];


//array_filter percorre todos os livros e para cada livro ($l), verifica se o id da requisiçao é igual o do array
$filtroLivro = array_filter($livros, function ($l) use ($id) {

    return $l['id']  == $id;
});

//Varivel vai receber o primeiro que bata com os requisitos
$livro = array_pop($filtroLivro);

view('livro', compact('livro'));
/* 
exemplo de metodo sem compact

view('livro',['livro' => $livro]);
 */
?>