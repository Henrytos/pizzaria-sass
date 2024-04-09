<?php
$pedidos = all_requests($conexion);
print_r($pedidos);
?>

<table class="w-full table">
    <thead>
        <tr class="text-lg">
            <th>Nome</th>
            <th>Endereço</th>
            <th>Pedido</th>
            <th>Valor</th>
            <th>Troco</th>
            <th>Entregue</th>
        </tr>
    </thead>
    <tbody class="text-xm">

        <?php if ($pedidos): ?>
        <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td>Henry</td>
            <td>Rua violeta.....</td>
            <td>
                <?php echo $pedido["bebidas"] ?>
            </td>
            <td>
                <?php echo $pedido["valor"] ?>
            </td>
            <td>
                <?php echo $pedido["troco"] ?>
            </td>
            <td class="flex items-center gap-1">
                <span class="w-2 h-2 bg-green-500 rounded-full inline-block translate-y-px"></span>
                <?php echo $pedido["status"] ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>

    </tbody>
</table>