<?php
function all_requests($conexion)
{
    $sql = "SELECT * FROM pedididos a INNER JOIN endereco b ON a.endereco_id = b.id";
    $rows = $conexion->query($sql);
    return $rows->fetch_all(MYSQLI_ASSOC);
}
?>