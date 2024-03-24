<?php
function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "123456";
    $db = "tp_php";

    $conn = new mysqli($servidor, $usuario, $password, $db);

    if($conn -> connect_error) {
        die("Error de conexión: " . $conn -> connect_error);
    }
    return $conn;
    //echo "Conexión exitosa";
}
?>