<?php

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

?>