<?php
include './services/requests.service.php';
$pedidos = all_requests_to_send($conexion);
?>

<?php if ($pedidos): ?>
<table class="w-full table">
    <thead>
        <tr class="text-lg">
            <th>Nome</th>
            <th>Endereço</th>
            <th>bebidas</th>
            <th>pizza</th>
            <th>Valor</th>
            <th>Troco</th>
            <th>Entregue</th>

        </tr>
    </thead>
    <tbody class="text-xm">
        <?php foreach ($pedidos as $pedido): ?>
        <?php
                $color = $pedido["status"] == "entregue" ? "bg-green-500" : "bg-red-500";
                $enderco = $pedido["rua"] . " - " . $pedido["numero"] . "  -  " . $pedido["bairro"];
                ?>

        <tr>
            <td>
                <?php echo $pedido["nome"] ?>
            </td>
            <td>
                <?php echo $enderco ?>
            </td>
            <td>
                <?php echo $pedido["bebidas"] ?>
            </td>
            <td>
                <?php echo $pedido["pizzas"] ?>
            </td>
            <td>
                <?php echo $pedido["valor"] ?>
            </td>
            <td>
                <?php echo $pedido["troco"] ?>
            </td>
            <td class="flex items-center gap-1">
                <span class="w-2 h-2 <?php echo $color; ?> rounded-full inline-block translate-y-[2px]"></span>

                <?php if ($pedido['status'] == "pendente"): ?>
                <button class="button is-danger is-dark">
                    entregar
                </button>
                <?php else: ?>
                <?php echo $pedido["status"] ?>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<?php include './components/not-found-request.view.php' ?>

<?php endif; ?>