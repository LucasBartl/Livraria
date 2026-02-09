<?php

function loadController(){

    //Validaçao de url 
    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

    if (!$controller) $controller = 'index';



    //A função file_exists verifica se a arquivo de rota existe 
    if (!file_exists("controllers/{$controller}.controller.php")) {
        http_response_code(404);
        echo "<h1>";
        echo "Página não existe!";
        echo "<h1/>";
        die();
    }




    require "controllers/{$controller}.controller.php";
}

loadController();