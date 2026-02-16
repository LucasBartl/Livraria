<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded  ">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="px-4 py-3 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400  mb-1">Email</label>
                <input type="email"
                    class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                    placeholder=""
                    name="email" require>
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400  mb-1">Senha</label>
                <input type="password"
                    class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                    placeholder=""
                    name="senha" require>
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900  text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-700">Logar</button>
        </form>
    </div>
    <div>
        <div class="border border-stone-700 rounded  ">
            <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastro</h1>
           
            <form  class="px-4 py-3 space-y-4" method="POST" action="/registrar">
                 <?php  if(strlen($mensagem) > 0):  ?>
                    <div class="border-green-800 bg-green-900  text-green-400 px-4 py-2 rounded-md border-2" >
                         <?= $mensagem ?>
                    </div>
                <?php endif; ?>
                <div class="flex flex-col">
                    <label class="text-stone-400  mb-1">Nome</label>
                    <input type="text"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder=""
                        name="nome" require>
                </div>
                <div class="flex flex-col">
                    <label class="text-stone-400  mb-1">Email</label>
                    <input type="email"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder=""
                        name="email" require>
                </div>
                <div class="flex flex-col">
                    <label class="text-stone-400  mb-1">Confirme seu Email</label>
                    <input type="email"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder=""
                        name="confirmacao_email" require>
                </div>
                <div class="flex flex-col">
                    <label class="text-stone-400  mb-1">Senha</label>
                    <input type="password"
                        class="border-stone-800 border-2 items-center rounded-md bg-stone-900 text-sm focus:outline-none px-2 py1"
                        placeholder=""
                        name="senha" require>
                </div>

                <button type="reset" class="border-stone-800 bg-stone-900  text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-700">
                    Cancelar
                </button>

                <button type="submit" class="border-stone-800 bg-stone-900  text-stone-400 px-4 py-2 rounded-md border-2 hover:bg-stone-700">
                    Cadastrar
                </button>

        </div>
    </div>