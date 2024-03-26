<?php
include "conexion.php";

$conn = conexion();
$id = $_GET['id'];
$sql = "DELETE FROM empresa WHERE id='$id'";

if($conn!=null) {
    if($conn->query($sql)==true) {
        echo "<script>alert('Registro eliminado.');"."window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar.');"."window.location.href='index.php';</script>";
    }
}
?>