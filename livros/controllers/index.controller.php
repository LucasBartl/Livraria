<?php
$search = $_REQUEST['search'] ?? '';

$livros = livro::all($search);
view('index', compact('livros'));
