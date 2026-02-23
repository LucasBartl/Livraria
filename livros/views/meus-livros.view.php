<h1>Meus Livros</h1>


<div class=" grid grid-cols-4 gap-4">

    <div class="col-span-3 gap-4 grid">

    </div>
    <div>
        <div class="border border-stone-700 rounded  ">
            <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo livro:</h1>
            <form class="px-4 py-3 space-y-4" method="POST" action="/criar-livro">

                <?php if ($validacoes = flash()->get('validacoes')): ?>
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
                    <label class="text-stone-400  mb-1">Título</label>
                    <input
                        type="text"
                        name="titulo"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder=""></>
                </div>

                <div class="flex flex-col">
                    <label class="text-stone-400  mb-1">Autor</label>
                    <input
                        type="text"
                        name="autor"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder=""></>
                </div>

                <div class="flex flex-col">
                    <label class="text-stone-400  mb-1">Descrição</label>
                    <textarea
                        type="text"
                        name="descricao"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder=""></textarea>
                </div>

                <div class="flex flex-col">
                    <label class="text-stone-400  mb-1">Ano lançamento</label>

                    <select
                        name="ano_lancamento"
                        type="password"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder="">

                        <?php foreach (range(1800, date('Y')) as $ano) : ?>
                            
                            <option value="<?= $ano ?>"><?= $ano ?></option>
                        
                        <?php endforeach; ?>

                    </select>

                </div>


                <div class="flex flex-col">
                    <label class="text-stone-400  mb-1">Nota</label>

                    <select
                        name="nota"
                        type="password"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder="">

                        <option value="1">⭐</option>
                        <option value="2">⭐⭐</option>
                        <option value="3">⭐⭐⭐</option>
                        <option value="4">⭐⭐⭐⭐</option>
                        <option value="5">⭐⭐⭐⭐⭐</option>

                    </select>

                </div>

                <button type="submit" class="border-stone-800 bg-stone-900  text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-700">Enviar</button>
            </form>
        </div>
    </div>
</div>