<?php

//Para deixar uma variavel opcional no PHP podemos usar desse modo:  $variavel = null,  $data = [] e etc 

function view($view, $data = [] ){

    foreach($data as $key => $value){
        //Manteve o nome da chave e após recebeu o valor da segunda $value
        //Lembrete para o futuro pois vou ter duvida
        $$key = $value;
    };

    require "views/templates/app.view.php";

};


function dd(...$dump){

    echo "<pre>";
    var_dump($dump);
    echo "<pre/>";


    die();
};

function abort($code){
    http_response_code($code);
    view($code);
    die();
};
