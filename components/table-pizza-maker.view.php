<?php
include './services/requests.service.php';
$pedidos = all_requests_to_maker($conexion);
?>

<?php if ($pedidos): ?>
<table class="w-full table">
    <thead>
        <tr class="text-lg">
            <th>Nome</th>
            <th>Pizzas</th>
            <th>Bebidas</th>
            <th>status</th>
        </tr>
    </thead>
    <tbody class="text-xm">
        <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td>
                <?php echo $pedido["nome"] ?>
            </td>
            <td>
                <?php echo $pedido["pizzas"] ?>
            </td>
            <td>
                <?php echo $pedido["bebidas"] ?>
            </td>
            <td>
                Em preparo
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<?php include './components/not-found-request.view.php' ?>

<?php endif; ?>