<?php

function loadController(){

    //Validaçao de url 
    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

    if (!$controller) $controller = 'index';



    //A função file_exists verifica se a arquivo de rota existe 
    if (!file_exists("controllers/{$controller}.controller.php")) {
        abort(404);   
    }




    require "controllers/{$controller}.controller.php";
}

loadController();