<?php
session_start();

if (!$_SESSION['cargo']) {
    header("Location: index.php");
    $_SESSION['errors'] = "usuario não autenticcado";
}

$cargo = $_SESSION['cargo'];
switch ($cargo) {
    case 'motoboy':
        break;
    case 'pizaiolo':
        break;
    case 'gerente':
        break;
    case 'atedente':
        break;
    default:
        header("Location: index.php");
        $_SESSION['errors'] = "Você não tem cargo valido";
        break;
}
?>