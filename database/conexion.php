<?php
try {
    $host = 'localhost';
    $user = 'henry';
    $password = 'Hfra2006';
    $database = 'pizzaria';

    $conexion = new mysqli($host, $user, $password, $database);


    function find_by_user($usename, $password, $conexion)
    {
        $sql = "SELECT * FROM usuarios WHERE nome='$usename' AND senha='$password'";
        $row = $conexion->query($sql);
        if ($row->num_rows > 0) {
            return $row->fetch_assoc();
        } else {
            return false;
        }

    }
    function create_new_user($usename, $password, $office, $conexion)
    {
        $user = find_by_user($usename, $password, $conexion);
        if ($user) {
            return false;
        } else {
            $sql = "INSERT INTO usuarios VALUES (null,  '$usename', '$password', '$office')";
            $conexion->query($sql);
            return true;
        }

    }

    function all_requests($conexion)
    {
        $sql = "SELECT * FROM pedididos";
        $rows = $conexion->query($sql);
        return $rows->fetch_assoc();
    }


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>