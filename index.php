<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correndo contra o tempo</title>
</head>

<body>

    <?php

    $titulo = "Primeiro projeto PHP";
    $subTitulo = "Estou empolgado";
    $portifolio = "Meu portifolio";
    $status = true;
    $dataProjeto = "06-02-2026";
    $descricao = "Aprendendo super rapido e tals ";
    $ano = 2026;
    $projetos = [
        [
            "Nome" => "Meu portifolio",
            "Descricao" => "Aprendendo super rapido e tals",
            "Ano" => 2026,
            "Status" => false
        ],
        [
            "Nome" => "Lista de Compras",
            "Descricao" => "Aprendendo super rapido e tals",
            "Ano" => 2026,
            "Status" => true
        ],
        [
            "Nome" => "Lista de livros",
            "Descricao" => "leitura e tals",
            "Ano" => 2029,
            "Status" => true
        ],
        [
            "Nome" => "Pontos de onibus",
            "Descricao" => "transporte e tals",
            "Ano" => 2023,
            "Status" => true
        ]
    ];

    function verificarStatus($p){
        //Condiçao de validaçao dentro do Arry
        if ($p["Status"]) {
            return '<span style="color:green">Finalizado ✅</span>';
        }
        return '<span style="color:red">Não finalizado ❌</span>';
    }


    $filtro = function ($Listaprojetos, $finalizados = null){

        if(is_null($finalizados)){
            return $Listaprojetos;
        }

        $filtrados = [];


        foreach ($Listaprojetos as $projeto) {

            if ($projeto['Status'] === $finalizados) 
                {
                $filtrados[] = $projeto;
            }

        }
        return $filtrados;
    };


    $filtroAno = function ($Listaprojetos, $ano ){


        $filtrados = [];


        foreach ($Listaprojetos as $projeto) {

            if ($projeto['Ano'] === $ano) 
                {
                $filtrados[] = $projeto;
            }

        }
        return $filtrados;
    };

    $filtroDoisValores= function($Listaprojetos, $chave ,$valor){

        $filtrados = [];

        foreach ($Listaprojetos as $projeto) {
            
            if($projeto[$chave] === $valor){

                $filtrados[] = $projeto;

            }
        }
        return $filtrados;
    };

    

    
    $projeosFiltrados = $filtro($projetos, null);
    $projeosFiltrados = $filtroDoisValores($projetos, 'Ano', 2023);
    

    ?>

    <div>
        <h1>
            <?= $titulo ?>
        </h1>
        <p>
            <?php $subTitulo ?>
        </p>
        <hr>
        <!-- utilizaçao de arrays em PHP -->
        <ul>
            <?php foreach ($projeosFiltrados as $projetin) : ?>
                <div>
                    <?php if ((2026 - $ano) > 2): ?>style="background-color: burlywood;"<?php endif; ?>
                    <h2><?= $projetin['Nome'] ?></h2>
                    <p><?= $projetin['Descricao'] ?></p>
                    <div><?= $projetin['Ano'] ?></div>

                    <?php echo verificarStatus($projetin); ?>

                    <!--  <div>
                        <?php if ($projetin['Status']): ?> <span style="color:green">Finalizado ✅</span>
                        <?php else: ?> <span style="color:red">Não finalizado ❌</span>
                        <?php endif; ?>
                    </div> -->
                </div>
            <?php endforeach; ?>
        </ul>


    </div>




</body>

</html>