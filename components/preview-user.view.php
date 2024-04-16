<?php
$user = $_SESSION['user'] ? $_SESSION['user'] : [];
?>

<div class="flex gap-4">
    <span class="text-lg text-white">Funcionario:
        <span class="font-semibold uppercase">
            <?php echo $user['nome']; ?>
        </span>
    </span>
    <span class="text-lg text-white"> Cargo:
        <span class="font-semibold uppercase">
            <?php echo $user['cargo']; ?>
        </span>
    </span>
</div>