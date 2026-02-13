<?php


class DB
{

    private $db;

    //Metodo construtor 
    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros($pesquisa = null)
    {

        //$prepare recebe o select  
        $prepare = $this->db->prepare("select * from livros              
        where usuario_id = 1 and
        titulo like :pesquisa ");
        //Após usando o metodo bindValue informamos que :pesquisa do select é alterado para a variavel $pesquisa
        $prepare->bindValue(':pesquisa', "%$pesquisa%");
        //Definimos o tipo da PDO
        $prepare->setFetchMode(PDO::FETCH_CLASS, livro::class);
        //Aqui executamos o select, e guarda a informaçao na propria variavel $prepare
        $prepare->execute();
        //E por final é usado o fetchAll para verificaçao do conteudo 
        return  $prepare->fetchAll();
    }


    public function livro($id)
    {
        //$prepare recebe o select  
        $prepare = $this->db->prepare("select *  from livros where id = :id  ");
        //Após usando o metodo bindValue informamos que :pesquisa do select é alterado para a variavel $pesquisa
        $prepare->bindValue('id', $id);
        //Definimos o tipo da PDO
        $prepare->setFetchMode(PDO::FETCH_CLASS, livro::class);
        //Aqui executamos o select, e guarda a informaçao na propria variavel $prepare
        $prepare->execute();
        //E por final é usado o fetch para verificaçao do conteudo 
        return $item = $prepare->fetch();



        //return array_map(fn($item) => livro::make($item), $itens)[0];

    }
}
