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

    public $nota_avaliacao;

    public $count_avaliacoes;

    public function query($where, $params)
    {
        $database = new Database(config('database'));
        
        return  $database->query(
            query: "
                select 
                l.id,
                l.titulo,
                l.autor,
                l.descricao,
                l.ano_lancamento,
                round(coalesce(avg(a.nota), 0)) as nota_avaliacao,
                count(a.id) as count_avaliacoes
                from livros l
                left join avaliacoes a on a.livro_id = l.id
                where $where
                group by 
                l.id,
                l.titulo,
                l.autor,
                l.descricao,
                l.ano_lancamento",
            class: self::class,
            params: $params
        );
    }

    public static function get($id)
    {
        return (new self)->query('l.id = :id', ['id' => $id])->fetch();
    }

    public static function all($search)
    {
        return (new self)->query(' titulo like :filtro', ['filtro' => "%$search%"])->fetchAll();
    }

    public static function meus($usuario_id)
    {
        return (new self)->query('l.usuario_id = :usuario_id', ['usuario_id' => $usuario_id])->fetchAll();
    }
};
