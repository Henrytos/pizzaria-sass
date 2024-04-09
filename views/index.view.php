<?php
session_start();
$_SESSION['cargo'] = '';
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : "";

if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $usuario = find_by_user($nome, $senha, $conexion);

    if ($usuario) {
        $_SESSION['cargo'] = $usuario['cargo'];
        header("Location: validate.php");
    } else {
        $errors = "Usuario não econtrado";
        $_SESSION['cargo'] = '';
    }
}
?>

<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzaria</title>
    <!-- bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css" />
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen grid grid-cols-2 antialised">
    <section class="border-r border-zinc-800 flex flex-col justify-between p-4 text-zinc-400">
        <h2 class="font-semibold text-lg uppercase flex gap-1">
            <span>pizzaria</span> <i data-lucide="pizza"></i>
        </h2>
        <span class="text-sm">Diretios de Henry 2024 &copy; </span>
    </section>

    <section class="flex items-center justify-center">
        <form action="" method="POST" class="w-full flex flex-col gap-4 max-w-sm">
            <h2 class="title">Sing in</h2>

            <div class="space-y-2">
                <label for="nome">nome:</label>
                <input type="text" name="nome" id="nome" class="input" required />
            </div>
            <div class="space-y-2">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" class="input" required />
            </div>
            <?php if ($errors):
                ; ?>
            <div class="alert">
                <?php echo $errors; ?>
            </div>
            <?php endif; ?>
            <button type="submit" class="button is-info is-dark w-full border">
                entrar
            </button>
        </form>



    </section>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
    lucide.createIcons();
    </script>
</body>

</html>