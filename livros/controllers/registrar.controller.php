<?php


/* Registro de usuário no banco */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $resultado =  $database->query(
        query:"insert into usuarios (nome, email, senha) values (:nome, :email, :senha ) ",
        params:[
            'nome'=>$_POST['nome'],
            'email'=>$_POST['email'],
            'senha'=>$_POST['senha']     
        ]
    );


    //Após finalizar iremos mudar o location dele para login com mensagem de sucesso 
    header('location: /login?mensagem=cadastrado!');
    exit();
}







