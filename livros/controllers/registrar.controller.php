<?php
require 'Validacao.php';

/* Registro de usuário no banco */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $validacao = Validacao::validar([

        'nome' => ['required'],
        'email' => ['required', 'email', 'confirmed'],
        'senha' => ['required', 'min:8', 'max:30', 'strong'],



    ],$_POST);

    if($validacao -> naoPassou()){
        $_SESSION['validacoes'] = $validacao->validacoes;
        header('location: /login');
        exit();
    }




    //Inserçao de usuário ao banco 
    $resultado =  $database->query(
        query: "insert into usuarios (nome, email, senha) values (:nome, :email, :senha ) ",
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ]
    );


    //Após finalizar iremos mudar o location dele para login com mensagem de sucesso 
    header('location: /login?mensagem=cadastrado!');
    exit();
}
