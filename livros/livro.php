<!DOCTYPE html>
<html lang="en">

<?php 
    require 'dados.php';
    $id = $_REQUEST['id'];


    //Criamos uma varivel que esta utilizando o array_filter que verifica se existe um id igual e se existir retorna o mesmo
    $filtroLivro = array_filter($livros, function ($l) use($id) {
     
        return $l['id']  == $id; 
    });
    $livro = array_pop($filtroLivro);

    

?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Livraria</title>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900 ">
        <nav class="mx-auto max-w-screen-lg  flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wde">Book Wise</div>
            <ul class="flex space-x-4">
                <li><a href="" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="/login">Fazer login</a></li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto  max-w-screen-lg  space-y-10">
       <?= $livro['titulo'] ?>
            <div class=" border-stone-800  p-2 rounded border-2 bg-stone-900 ">
                <div class=" flex">
                    <div class="w-1/3">imagem</div>
                    <div class="space-y-1">
                        <a href="/livro.php?id=<?= $livro['id'] ?>" class="font-semivbold hover:underline"><?= $livro['titulo'] ?></a>
                        <div class="text-xs italic"><?= $livro['autor'] ?></div>
                        <div class="text-xs italic">⭐⭐⭐⭐(3avaliacao)</div>
                    </div>
                </div>
                <div class="text-sm mt-2">
                    <?= $livro['descricao'] ?>
                </div>
            </div>
       
    </main>



</body>

</html>