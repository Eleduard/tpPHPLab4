<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
  </head>
  <?php
  include 'conexion.php';

  $denominacion = $quienes_somos = $domicilio = $telefono = $email = $horario_atencion = "";
  $latitud = $longitud;

  if($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = test_input($_POST["id"]);
      $denominacion = test_input($_POST["denominacion"]);
      $quienes_somos = test_input($_POST["quienes_somos"]);
      $domicilio = test_input($_POST["domicilio"]);
      $telefono = test_input($_POST["telefono"]);
      $email = test_input($_POST["email"]);
      $horario_atencion = test_input($_POST["horario_atencion"]);
      $latitud = test_input($_POST["latitud"]);
      $longitud = test_input($_POST["longitud"]);
  }

  $conn = conexion();
  $sql = "";

  if($id=="") {
      $sql = "INSERT INTO empresa(denominacion, quienes_somos, domicilio, telefono, email, horario_atencion, latitud, longitud)
      VALUES('$denominacion', '$quienes_somos', '$domicilio', '$telefono', '$email', '$horario_atencion', '$latitud', '$longitud')";
  } else {
      $sql = "UPDATE empresa SET denominacion='$denominacion', quienes_somos='$quienes_somos', 
      domicilio='$domicilio', telefono='$telefono', email='$email', horario_atencion='$horario_atencion', latitud='$latitud', longitud='$longitud' WHERE id='$id'";
  }

  if($conn != null) {
      if ($conn->query($sql) == TRUE) {
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
  <body onload="window.location.href='index.php'">
    
  </body>