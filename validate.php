<?php
session_start();
validate();
function validate()
{
    if (!$_SESSION['cargo']) {
        header("Location: index.php");
        $_SESSION['errors'] = "usuario não autenticcado";
    }
    $cargo = $_SESSION['cargo'];
    switch ($cargo) {
        case 'motoboy':
            header("Location: deliveryman.php");
            break;
        case 'pizaiolo':
            header("Location: pizza-maker.php");
            break;
        case 'gerente':
            header("Location: manager.php");
            break;
        case 'atedente':
            header("Location: attendant.php");
            break;

        default:
            header("Location: index.php");
            $_SESSION['errors'] = "Você não tem cargo valido";
            break;
    }
}
?>