<!--
id
denominacion
quienes_somos
domicilio
telefono
email
horario_atencion
latitud
longitud
-->

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
    <div class="page">
    <!--========================================================
                                HEADER
    =========================================================-->
      <header>  
        <div class="container top-sect">
          <div class="navbar-header">
            <h1 class="navbar-brand">
              LISTADO DE EMPRESAS
            </h1>
            <a class="search-form_toggle" href="#"></a>
          </div>
        </div>
      </header>
      <?php
        $conn = conexion();  
        $sql = "SELECT * FROM empresa";
        if($conn != null) {
            $resultado = $conn->query($sql);
        }
        if($resultado->num_rows > 0) {
      ?>
      <main>
        <div>  
          <table class="table">
            <thead>
                <th class="table-bordered">Nombre de empresa</th>
            </thead>
            <tbody>
            <?php
                while($row = $resultado->fetch_assoc()) {
            ?>
              <tr>
                  <td class="table-bordered"><a href="home.php?id=<?php echo $row['id'] ?>"><?php echo $row["denominacion"] ?></a></td>
                  <td ><a href="formularioEmpresa.php?id=<?php echo $row['id'] ?>">Actualizar</a></td>
                  <td ><a href="eliminarEmpresa.php?id=<?php echo $row['id'] ?>">Eliminar</a></td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
        <?php
          } else {
        ?>
        <h3 style="padding: 1rem;">No hay registros</h3>
        <?php
          }
        ?>
        <div class="container">
          <button class="active" onclick="location.href='formularioEmpresa.php'">Agregar empresa</button>
        </div>
      </main>
      <script>
        function cambiarTitulo(nuevoTitulo) {
            document.getElementById("tituloPestana").innerHTML = nuevoTitulo;
        }
        cambiarTitulo("<?php echo 'Empresas'; ?>");
      </script>
    </body>
</html>