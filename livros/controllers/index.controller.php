<?php
/* Model */
$search = $_REQUEST['search'] ?? '';
$livros = (new DB) -> livros($search);

view('index', compact('livros'));
