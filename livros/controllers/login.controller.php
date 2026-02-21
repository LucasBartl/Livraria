<?php




//receber formulario com email 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $validacao = Validacao::validar([

        'email' => ['required', 'email'],
        'senha' => ['required'],



    ], $_POST);

    //Fazer verificaçao no banco de dados 
    $consultaUsuario = $database->query(
        query: "select * from usuarios 
             where email = :email    
                 and senha = :senha ",
        class: Usuarios::class,
        params: compact('email', 'senha')
    )->fetch();

    if($validacao-> naoPassou('login')){
        header('location: /login');
        exit();
    }

    if ($consultaUsuario) {
        //Se existir vamos adicionar na sessão que o usuário esta autenticado 

        $_SESSION['auth'] = $consultaUsuario;
        flash()->push('mensagem', 'seja bem vindo' . $consultaUsuario->nome . '!');
        header("location: /");
        exit();
    }
}



view('login');
