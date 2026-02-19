<?php
session_start();
require 'functions/functions.php';
require 'models/livro.php';
//Variavel de config do BD
$config = require('config.php');
require 'database.php';
require "routes/routes.php";
