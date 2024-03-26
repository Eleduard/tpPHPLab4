<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title id="tituloPestana"><?php echo $tituloPestana; ?><</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/google-map.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/rd-smoothscroll.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
    <?php include 'conexion.php'; ?>
  </head>
  <body>
    <header class="container">
      <h2>Nueva empresa</h2>
    </header>
    <main class="container">
      <form action="guardarEmpresa.php" method="POST" style="padding-top: 1rem">
        <?php
          $idEmpresa = $denominacion = $quienesSomos = $domicilio = $telefono = $email = $horarios = "";
          $latitud = $longitud = 0;
          if($_GET!=null) {
            $conn = conexion();
            $idEmpresa = $_GET['id'];
            $sql = "SELECT * FROM empresa WHERE id=$idEmpresa";
            $result = $conn->query($sql)->fetch_assoc();
            $denominacion = $result['denominacion'];
            $quienesSomos = $result['quienes_somos'];
            $domicilio = $result['domicilio'];
            $telefono = $result['telefono'];
            $email = $result['email'];
            $horarios = $result['horario_atencion'];
            $latitud = $result['latitud'];
            $longitud = $result['longitud'];
          }
        ?>
        <table>
          <tr>
            <td style="display: none">
              <input type="text" name="id" id="id" value="<?php echo $idEmpresa ?>">
            </td>
          </tr>
            <td style="padding-bottom: 1rem">
              <label for="denominacion">Denominación</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="text" name="denominacion" id="denominacion" value="<?php echo $denominacion ?>">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="quienes_somos">Quiénes somos</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="text" name="quienes_somos" id="quienes_somos" value="<?php echo $quienesSomos ?>">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="domicilio">Domicilio</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="text" name="domicilio" id="domicilio" value="<?php echo $domicilio ?>">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="telefono">Teléfono</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="tel" name="telefono" id="telefono" value="<?php echo $telefono ?>">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="email">Email</label>
            </td>
            <td style="padding-bottom: 1rem">
            <input type="email" name="email" id="email" value="<?php echo $email ?>">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="horario_atencion">Horarios</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="text" name="horario_atencion" id="horario_atencion" value="<?php echo $horarios ?>">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="latitud">Latitud</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="number" name="latitud" id="latitud" value="<?php echo $latitud ?>">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="longitud">Longitud</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="number" name="longitud" id="longitud" value="<?php echo $longitud ?>">
            </td>
          </tr>
        </table>
        <input type="submit" value="Agregar">
        <input type="button" value="Cancelar" onclick="window.location.href='index.php'">
      </form>
    </main>
  </body>
</html>