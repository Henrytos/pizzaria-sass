<?php
try {
    $host = 'localhost';
    $user = 'henry';
    $password = 'Hfra2006';
    $database = 'pizzaria';

    $conexion = new mysqli($host, $user, $password, $database);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>