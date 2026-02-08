<?php
    require 'dados.php'

?>
<!DOCTYPE html>
<html lang="en">

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

        <form action="" class="w-full flex space-x-2 mt-6">
            <input type="text"
                class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                placeholder="Pesquisar..."
                name="sourch">
            <button type="search">🔍</button>
        </form>

        <!-- Lista de livros -->
        <section class="grid-cols-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid gap-3 ">


            <!-- Livros -->

            <?php foreach($livros as $livro):?>

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

            <?php endforeach; ?>
        </section>
    </main>



</body>

</html>