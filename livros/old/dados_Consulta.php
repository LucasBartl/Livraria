<?php

//OBS: PDO é uma classe que conecta PHP a bancos de dados 

/* 
$db= new PDO('sqlite:database.sqlite');
$query = $db->query("select * from livros ");


$livros = $query -> fetchAll();
 */

/* 
Anotação do que aconteceu aqui: 
Antes de implementar o SQLite, nós tínhamos um array livros que tinha todas as informações dos livros 
cadastrados. Fizemos o seguinte, criamos uma variável db que armazena recebe o banco sqlite, que tem o caminho do banco de dados. 
Depois criamos uma variavel $query, que faz um select no nosso banco (poderia ser insert, delete e etc). Após isso, criamos uma variável $livros 
substituindo a array antigo, ou seja agora realmeente estamos usando banco de dados .
 */

/* $livros = [
    [
        'id' => 1,
        'titulo' => "Senhor dos aneis",
        'autor' => "Tolkien",
        'descricao' => 'Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor, que serão'
    ],
    [  
        'id' => 2,
        'titulo' => "Livro PHP",
        'autor' => "Tjose",
        'descricao' => 'Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor, que serão'
    ],
    [
        'id' => 3,
        'titulo' => "Livro JS",
        'autor' => "jose",
        'descricao' => 'Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor, que serão'
    ],
    [
        'id' => 4,
        'titulo' => "livro relacionamentos",
        'autor' => "romer",
        'descricao' => 'Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor, que serão'
    ],

]; */
