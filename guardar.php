<?php
include 'conexion.php';

$titulo = $resumen = $imagen = $contenido = "";
$fechaF = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = test_input($_POST["titulo"]);
    $resumen = test_input($_POST["resumen"]);
    $imagen = test_input($_POST["imagen"]);
    $contenido = test_input($_POST["editorHtml"]);
    $fecha = $_POST["fecha"];
    $fechaF = date("Y-m-d", strtotime($fecha));
    $idEmpresa = test_input($_POST["idEmp"]);
}

$conn = conexion();

if(isset($_POST["id"]) && !is_null($_POST["id"]) && !empty($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "UPDATE noticia SET titulo_noticia='$titulo', resumen_noticia='$resumen', 
            imagen_noticia='$imagen', contenido_html='$contenido', fecha_publicacion='$fecha' WHERE id='$id'";
} else {
    $sql = "INSERT INTO noticia(titulo_noticia, resumen_noticia, imagen_noticia, contenido_html, fecha_publicacion, id_empresa)
            VALUES('$titulo', '$resumen', '$imagen', '$contenido', '$fecha', '$idEmpresa')";
} 

if($conn != null) {
    if ($conn->query($sql) === TRUE) {
        echo "Registro guardado.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>