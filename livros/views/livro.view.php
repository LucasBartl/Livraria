    <?php require_once '../views/partials/_livro.php'; ?>


    <!-- Avaliaçao -->

    <h2>Avaliações:</h2>

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