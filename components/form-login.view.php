<form action="" method="POST" class="w-full flex flex-col gap-4 max-w-sm">
    <h2 class="title">Sing in</h2>

    <div class="space-y-2">
        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome" class="input" required />
    </div>
    <di class="space-y-2">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" class="input" required />
    </di v>
    <?php if ($errors): ?>
        <div class="alert">
            <?php echo $errors; ?>
        </div>
    <?php endif; ?>
    <button type="submit" class="button is-info is-dark w-full border">
        entrar
    </button>
</form>