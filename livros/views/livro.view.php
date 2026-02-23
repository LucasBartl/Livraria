    <?php
    /* Obs:
        Em array_reduce passamos o primeiro parametro como o array que queremos usar 
        $carry é o acumulador (começa como null)
        $avaliacao é cada item do array 
        */
    $somatoria = array_reduce($avaliacoes, function ($carry, $now) {
        return ($carry ?? 0) + $now->nota;
    }) ?? 0;
    
    $quantidade = count($avaliacoes); //conta quantas avaliacoes eu tenho 
    if ($quantidade > 0) {
        $media = $somatoria / $quantidade;
    } else {
        $media = 0;
    }
    $mediaArredondada = round($media); //Força que seja um número inteiro
    $mediaArredondada = min($mediaArredondada, 5);
    $notaFinal = str_repeat('⭐', $mediaArredondada);

    ?>

   
    <?= $livro->titulo ?>
    <div class=" border-stone-800  p-2 rounded border-2 bg-stone-900 ">
        <div class=" flex">
            <div class="w-1/3">imagem</div>
            <div class="space-y-1">
                <a href="/livro?id=<?= $livro->autor ?>" class="font-semivbold hover:underline"><?= $livro->titulo ?></a>
                <div class="text-xs italic"><?= $livro->autor ?></div>
                <div class="text-xs italic"><?= $notaFinal ?>(<?= count($avaliacoes) ?> Avaliações)</div>
            </div>
        </div>
        <div class="text-sm mt-2">
            <?= $livro->descricao ?>
        </div>
    </div>

    <!-- Avaliaçao -->

    <h2>Avaliações</h2>

    <div class=" grid grid-cols-4 gap-4">

        <div class="col-span-3 gap-4 grid">

            <?php foreach ($avaliacoes as $avaliacao) : ?>
                <div class="border border-stone-700 rounded p-2">
                    <?= $avaliacao->avaliacao ?>
                    <?php
                    $nota = str_repeat("⭐", $avaliacao->nota);
                    ?>
                    <?= $nota ?>
                </div>
            <?php endforeach; ?>

        </div>

        <div>
            <?php
            if (auth()):  ?>
                <div class="border border-stone-700 rounded  ">
                    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Avaliar</h1>
                    <form class="px-4 py-3 space-y-4" method="POST" action="/criar-avaliacao">

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
                        <input name="livro_id" value="<?= $livro->id ?>" type="hidden">
                        <div class="flex flex-col">
                            <label class="text-stone-400  mb-1">Avaliação</label>
                            <textarea
                                type="text"
                                name="avaliacao"
                                class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                                placeholder="">
                            </textarea>
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
            <?php endif; ?>

        </div>



    </div>