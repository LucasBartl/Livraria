<?php

require '../models/livro.php';
require '../models/usuario.php';
require '../models/avaliacao.php';
session_start();
require '../flash.php';
require '../functions/functions.php';
//Variavel de config do BD
$config = require '../config.php';
require '../Database.php';
require "../Validacao.php";
require "../routes/routes.php";
