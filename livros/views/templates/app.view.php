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
                <li><a href="/" class="text-lime-500">Explorar</a></li>
                <li><a href="/meus-livro" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <?php if (isset($_SESSION['auth'])) : ?>
                    <li><a href="/logout">Olá, <?= $_SESSION['auth']->nome ?></a></li>
                <?php else: ?>
                    <li><a href="/login">Fazer login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main class="mx-auto  max-w-screen-lg  space-y-10">
        <?php require "views/{$view}.view.php" ?>
    </main>



</body>

</html>