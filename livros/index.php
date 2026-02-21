<?php

require 'models/livro.php';
require 'models/usuario.php';
session_start();
require 'flash.php';
require 'functions/functions.php';
require "Validacao.php";
//Variavel de config do BD
$config = require('config.php');
require 'database.php';
require "routes/routes.php";
