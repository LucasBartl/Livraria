 <form action=""  class="w-full flex space-x-2 mt-6">
     <input type="text"
         class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
         placeholder="Pesquisar..."
         name="search">
     <button type="search">🔍</button>
 </form>
 <section class="grid-cols-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid gap-3 "> 
    <?php foreach ($livros as $livro): ?>
         <div class=" border-stone-800  p-2 rounded border-2 bg-stone-900 ">
             <div class=" flex">
                 <div class="w-1/3">imagem</div>
                 <div class="space-y-1">
                     <a href="/livro?id=<?= $livro->id ?>" class="font-semivbold hover:underline"><?= $livro->titulo ?></a>
                     <div class="text-xs italic"><?= $livro->autor ?></div>
                     <div class="text-xs italic">⭐⭐⭐⭐(3avaliacao)</div>
                 </div>
             </div>
             <div class="text-sm mt-2">
                 <?= $livro -> descricao ?>
             </div>
         </div>

     <?php endforeach; ?>

 </section>