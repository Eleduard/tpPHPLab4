<?php 
include "header.php"; 

$conn = conexion();
$sql = "SELECT * FROM noticia";
if($conn != null) {
    $resultado = $conn->query($sql);
}
if($resultado->num_rows > 0) {
?>
        <table class="table">
            <thead>
                <th class="table-bordered">Id</th>
                <th class="table-bordered">Título</th>
                <th class="table-bordered">Resumen</th>
                <th class="table-bordered">Publicada</th>
                <th class="table-bordered">Fecha public.</th>
            </thead>
            <tbody>
<?php
    while($row = $resultado->fetch_assoc()) {
?>
                <tr>
                    <td class="table-bordered"><a href="tiny.php?id=<?php echo $row['id'] ?>"><?php echo $row["id"] ?></a></td>
                    <td class="table-bordered"><?php echo $row["titulo_noticia"] ?></td>
                    <td class="table-bordered"><?php echo $row["resumen_noticia"] ?></td>
                    <td class="table-bordered"><?php echo $row["publicada"] ?></td>
                    <td class="table-bordered"><?php echo $row["fecha_publicacion"] ?></td>
                    <td ><a href="eliminar.php?id=<?php echo $row['id'] ?>">Eliminar</a></td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
<?php
} else {
?>
        <h2>No hay registros</h2>
<?php
}
?>

        <button class="active" onclick="location.href='tiny.php'">Nueva noticia</button>

        <script>
            function cambiarTitulo(nuevoTitulo) {
                document.getElementById("tituloPestana").innerHTML = nuevoTitulo;
            }
            cambiarTitulo("<?php echo 'EDITOR'; ?>");
        </script>
    </body>
</html>
