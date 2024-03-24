<?php
include "conexion.php";

$conn = conexion();
$id = $_GET['id'];
$sql = "DELETE FROM noticia WHERE id='$id'";

if($conn!=null) {
    if($conn->query($sql)==true) {
        echo "<script>alert('Registro eliminado.');</script>";
        return;
    } else {
        echo "<script>alert('Error al eliminar.');</script>";
        return;
    }
}
?>