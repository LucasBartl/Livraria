<?php


class DB
{

    private $db;

    //Metodo construtor 
    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros($pesquisa = null )
    {
        $sql = "select * from livros
        where titulo like '%$pesquisa%' 
        or autor like  '%$pesquisa%' 
        or ano_lancamento like  '%$pesquisa%'";
       
        $query = $this->db->query($sql);
        $itens = $query->fetchAll();
     
        return array_map(fn($item) => livro::make($item), $itens);
    }


    public function livro($id)
    {
        $sql =  "select * from livros ";
        $sql .= "where id = " . $id;
        $query = $this->db->query($sql);
        $itens = $query->fetchAll();


        return array_map(fn($item) => livro::make($item), $itens)[0];

       
    }
}
