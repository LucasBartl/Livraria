<?= $livro->titulo ?>
<div class=" border-stone-800  p-2 rounded border-2 bg-stone-900 ">
    <div class=" flex">
        <div class="w-1/3">imagem</div>
        <div class="space-y-1">
            <a href="/livro?id=<?= $livro->autor ?>" class="font-semivbold hover:underline"><?= $livro->titulo ?></a>
            <div class="text-xs italic"><?= $livro->autor ?></div>
            <div class="text-xs italic">⭐⭐⭐⭐(3avaliacao)</div>
        </div>
    </div>
    <div class="text-sm mt-2">
        <?= $livro->descricao ?>
    </div>
</div>


<h2>Avaliações</h2>

<div class=" grid grid-cols-4 gap-4">

    <div class="col-span-3 ">Lista</div>

    <div class="border border-stone-700 rounded  ">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="px-4 py-3 space-y-4" method="POST">
            <?php if ($validacoes = flash()->get('validacoes_login')): ?> 
                <div class="border-red-800 bg-red-900  text-red-400 px-4 py-2 rounded-md border-2">
                    <ul>
                        <li>Algo esta errado </li>
                        <?php foreach ($validacoes as $validacao): ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="flex flex-col">
                <label class="text-stone-400  mb-1">Email</label>
                <input type="email"
                    class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                    placeholder=""
                    name="email">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400  mb-1">Senha</label>
                <input type="password"
                    class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                    placeholder=""
                    name="senha">
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900  text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-700">Logar</button>
        </form>
    </div>



</div>