<?php
/* Model*/

$id = $_REQUEST['id'];

$livro = (new DB)->livro($id);

view('livro', compact('livro'));
