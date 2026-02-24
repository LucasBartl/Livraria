 <form action="" class="w-full flex space-x-2 mt-6">
     <input type="text"
         class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
         placeholder="Pesquisar..."
         name="search">
     <button type="search">🔍</button>
 </form>
 <section class="grid-cols-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid gap-3 ">
    <?php foreach ($livros as $livro) {
        require './views/partials/_livro.php';} 
    ?>
</section>