<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location: /meus-livros');
    exit();
}

if(!auth()){
    abort(403);
}

$usuario_id = auth()->id;
$titulo = $_POST['titulo'];
$autor =  $_POST['autor'];
$descricao =  $_POST['descricao'];
$ano_lancamento = $_POST['ano_lancamento'];



$validacao = Validacao::validar([

    'titulo' => ['required', 'min:3'],
    'autor' => ['required'],
    'descricao' => ['required'],
    'ano_lancamento' => ['required']
], $_POST);

if ($validacao->naoPassou()) {
    header('location: /meus-livros');
    exit();
}


/* Parte de imagens dos livro */
$novonome = md5(rand());
$extensao = pathinfo($_FILES['imagem']["name"], PATHINFO_EXTENSION);
$imagem = "imagens/$novonome.$extensao";

move_uploaded_file($_FILES['imagem']['tmp_name'], __DIR__ .'/../public/' . $imagem);



$database->query(
    query:"insert into livros (titulo, autor, descricao, ano_lancamento, usuario_id, imagem) values (:titulo, :autor, :descricao, :ano_lancamento, :usuario_id, :imagem);",
    params: compact('titulo', 'autor', 'descricao','ano_lancamento','usuario_id', 'imagem' )
);

flash()->push('mensagem', 'Livro cadastrado com sucesso');
header('location: /meus-livros');
exit();