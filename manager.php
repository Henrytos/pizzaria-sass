<?php
require './validata_acess.php';
require './database/conexion.php';

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

<body class="min-h-screen antialised">
    <?php include ('./components/nav-bar.view.php') ?>
    <?php
    require './views/manager.view.php';
    ?>


    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
</body>

</html>