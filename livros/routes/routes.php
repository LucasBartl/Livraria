<?php
//Validaçao de url 
$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);


//Verifica se o controlador eciste 
if (!$controller) $controller = 'index';



//Verifica se o controlador existe e faz um require 
if (!file_exists("controllers/{$controller}.controller.php")) {
    abort(404);
}




require "controllers/{$controller}.controller.php";
