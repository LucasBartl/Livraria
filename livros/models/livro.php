<?php

// Representaçao de 1 registro do banco de dados em forma de classe 
class livro
{
    public $id;
    public $titulo;
    public $autor;
    public $descricao;
    public $ano_lancamento;
    public $usuario_id;

    public static function make($item)
    {
        $livro = new self();
        $livro->id = $item['id'];
        $livro->titulo = $item['titulo'];
        $livro->autor = $item['autor'];
        $livro->descricao = $item['descricao'];
        $livro->ano_lancamento = $item['ano_lancamento'];
        $livro-> usuario_id = $item['usuario_id'];
        return $livro;
    }
};
