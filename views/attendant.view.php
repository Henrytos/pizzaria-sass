<main class="w-full max-w-[1440px] p-5 m-auto mb-5">
    <h1 class="title uppercase">Criar pedidos</h1>

    <nav class="flex gap-3 mb-10">
        <a href="/anotation.html" class="font-semibold underline text-[#66d1ff]">Criar pedidos</a>
        <span>/</span>
        <a href="./pedidos.html">ver Pedidos</a>
    </nav>

    <form action="" class="w-full flex flex-col gap-4 max-w-md m-auto">
        <div class="space-y-2">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="input" required />
        </div>
        <div class="space-y-2">
            <label for="road">Rua:</label>
            <input type="text" name="road" id="road" class="input" required />
        </div>
        <div class="space-y-2">
            <label for="house_number">Numero de casa:</label>
            <input type="text" name="house_number" id="house_number" class="input" required />
        </div>
        <div class="space-y-2">
            <label for="neighborhood">Bairro:</label>
            <input type="text" name="neighborhood" id="neighborhood" class="input" required />
        </div>

        <div class="space-y-2">
            <label for="change">Troco:</label>
            <input type="email" name="change" id="change" class="input" required />
        </div>

        <div class="space-y-2">
            <label for="order">Pedido</label>
            <textarea name="order" id="order" class="w-full mih-10 max-h-40 bg-transparent border border-zinc-700 p-2"
                required></textarea>
        </div>
        <button type="submit" class="button is-info is-dark w-full border">
            Fazer pedidio
        </button>
    </form>
</main>