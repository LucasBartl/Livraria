<?php

//Para deixar uma variavel opcional no PHP podemos usar desse modo:  $variavel = null,  $data = [] e etc 

function view($view, $data = [])
{

    foreach ($data as $key => $value) {

        //Lembrete para o futuro pois vou ter duvida
        $$key = $value; //Manteve o nome da chave e após recebeu o valor da segunda $value
    };

    require "views/templates/app.view.php";
};


function dd(...$dump)
{

    dump($dump);


    die();
};
function dump(...$dump)
{

    echo "<pre>";
    var_dump($dump);
    echo "<pre/>";
};


function abort($code)
{
    http_response_code($code);
    view($code);
    die();
};

function flash()
{
    return new Flash;
}

function config($chave = null){
    $config =  require 'config.php';
    
    if(strlen($chave) > 0){
        return $config[$chave];
    }
    return $config;


}