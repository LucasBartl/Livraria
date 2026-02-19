<?php

//Utilizando sessões 
$_SESSION['teste'] = '';
header('location: /login');
exit();

/* Registro de usuário no banco */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $validacoes = [];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $confirmacao_email = $_POST['confirmacao_email'];
    $senha  = $_POST['senha'];

    // Nome precisa ser obrigatorio 
    if (strlen($nome) == 0) {
        $validacoes[] = "O nome é obrigatorio !";
    }
    if (strlen($email) == 0) {
        $validacoes[] = "O email é obrigatorio !";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $validacoes[] = "O email é invalido!";
    }
    if ($email != $confirmacao_email) {
        $validacoes[] = "Emails diferente, favor conferir";
    }
    if (strlen($senha) == 0) {
        $validacoes[] = "Senha é obrigatoria!";
    }
    if (strlen($senha) < 8 || strlen($senha) > 30) {
        $validacoes[] = "A senha precisa ter no entre 8 e 30 caracteres";
    }
    if (!str_contains($senha, '*')) {
        $validacoes[] = "Senha precisa ter um *";
    }
    if (sizeof($validacoes) > 0) {

             

    }

    /*     $resultado =  $database->query(
        query: "insert into usuarios (nome, email, senha) values (:nome, :email, :senha ) ",
        params: [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha']
        ]
    ); */


    //Após finalizar iremos mudar o location dele para login com mensagem de sucesso 
    header('location: /login?mensagem=cadastrado!');
    exit();
}
