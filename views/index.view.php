<?php
session_start();
include './services/users.service.php';
$_SESSION['cargo'] = '';
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : "";

if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $usuario = find_by_user($nome, $senha, $conexion);

    if ($usuario) {
        $_SESSION['cargo'] = $usuario['cargo'];
        $_SESSION['user'] = $usuario;
        header("Location: validate.php");
    } else {
        $errors = "Usuario não econtrado";
        $_SESSION['cargo'] = '';
    }
    print_r($usuario);
}
?>

<!DOCTYPE html>



<html lang="pt_BR" class="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzaria</title>
    <!-- bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css" />
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen grid grid-cols-2 antialised ">
    <section class="border-r border-zinc-800 flex flex-col justify-between p-4 text-zinc-400">
        <h2 class="font-semibold text-lg uppercase flex gap-1">
            <span>pizzaria</span> <i data-lucide="pizza"></i>
        </h2>
        <span class="text-sm">Diretios de Henry 2024 &copy; </span>
    </section>

    <section class="flex items-center justify-center">
        <?php include './components/form-login.view.php' ?>
    </section>

    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>