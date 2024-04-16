<?php
$errors = [];
$sucess = [];

if (isset($_POST['nome'])) {
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $cargo = $_POST['cargo'];
  $user = create_new_user($nome, $senha, $cargo, $conexion);
  if ($user) {
    array_push($sucess, "Usuario cadastrado com sucesso.");
  } else {
    array_push($errors, "Usuario existente");
  }
}
?>

<main class="w-full max-w-[1440px] p-5 m-auto mb-5">
    <h1 class="title uppercase">Cadastro funcionario</h1>
    <?php include './components/preview-user.view.php'; ?>

    <nav class="flex gap-3 mb-10">
        <a href="/anotation.html" class="font-semibold underline text-[#66d1ff]">Cadastrar</a>
        <span>/</span>
        <a href="./pedidos.html">ver Pedidos</a>
    </nav>

    <form action="" class="w-full flex flex-col gap-4 max-w-md m-auto" method="post">
        <div class="space-y-2">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="input" required />
        </div>
        <div class="space-y-2">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="input" required />
        </div>
        <div class="space-y-2 select block mb-6">
            <label for="cargo">Cargo:</label>
            <select name="cargo" id="cargo" class="w-full" required>
                <option value="motoboy">Entregador</option>
                <option value="atedente">Atendente</option>
                <option value="pizaiolo">Pizaiolo</option>
                <option value="gerente">Gerente</option>
            </select>
        </div>
        <?php if (sizeof($errors) > 0): ?>
        <div class="alert space-y-2">
            <?php foreach ($errors as $error): ?>
            <p>
                <?php echo $error ?>
            </p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <?php if (sizeof($sucess) > 0): ?>
        <div class="alert space-y-2">
            <?php foreach ($sucess as $suces): ?>
            <p>
                <?php echo $suces ?>
            </p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <button type="submit" class="button is-info is-dark w-full border">
            Cadastrar
        </button>
    </form>
</main>