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
        <table>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="denominacion">Denominación</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="text" name="denominacion" id="denominacion">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="quienes_somos">Quiénes somos</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="text" name="quienes_somos" id="quienes_somos">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="domicilio">Domicilio</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="text" name="domicilio" id="domicilio">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="telefono">Teléfono</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="tel" name="telefono" id="telefono">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="email">Email</label>
            </td>
            <td style="padding-bottom: 1rem">
            <input type="email" name="email" id="email">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="horario_atencion">Horarios</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="text" name="horario_atencion" id="horario_atencion">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="latitud">Latitud</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="number" name="latitud" id="latitud">
            </td>
          </tr>
          <tr>
            <td style="padding-bottom: 1rem">
              <label for="longitud">Longitud</label>
            </td>
            <td style="padding-bottom: 1rem">
              <input type="number" name="longitud" id="longitud">
            </td>
          </tr>
        </table>
        <input type="submit" value="Agregar">
        <input type="button" value="Cancelar">
      </form>
    </main>
    
    <?php

    ?>
  </body>
</html>