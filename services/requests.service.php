<?php
function all_requests_to_send($conexion)
{
    $sql = "SELECT * FROM pedididos a INNER JOIN endereco b ON a.endereco_id = b.id WHERE a.status ='pendente' OR a.status='entregue' ";
    $rows = $conexion->query($sql);
    return $rows->fetch_all(MYSQLI_ASSOC);
}


function all_requests_to_maker($conexion)
{
    $sql = "SELECT * FROM pedididos a INNER JOIN endereco b ON a.endereco_id = b.id WHERE a.status ='em preparo' ";
    $rows = $conexion->query($sql);
    return $rows->fetch_all(MYSQLI_ASSOC);
}
?>