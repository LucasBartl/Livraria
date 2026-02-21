<?php

$mensagem = $_REQUEST['mensagem'] ?? '';

//receber formulario com email 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

//Fazer verificaçao no banco de dados 
$consultaUsuario = $database->query(
    query: "select * from usuarios 
             where email = :email    
                 and senha = :senha ",
    class: Usuarios::class,
    params:compact('email', 'senha') 
)->fetch();

if($consultaUsuario){
//Se existir vamos adicionar na sessão que o usuário esta autenticado 

$_SESSION['auth'] = $consultaUsuario;
$_SESSION['mensagem'] = "seja bem vindo ".$consultaUsuario->nome. "!";
header("location: /");
exit();

}

}



view('login', compact('mensagem'));
