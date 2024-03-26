  <?php
  
  ?>
  
  <!--========================================================
                            CONTENT
  =========================================================-->
  <?php include 'header.php'; ?>
    <main> 
  <?php
  
  $sql = "SELECT * FROM noticia WHERE id_empresa='$idEmpresa'";
  if($conn != null) {
      $resultado = $conn->query($sql);
  }
  echo $resultado->num_rows;
  if($resultado->num_rows > 0) {
  ?>
      <section class="well well1 well1_ins1">
        <div class="camera_container">
          <div id="camera" class="camera_wrap">
  <?php
    while($row = $resultado->fetch_assoc()) {
  ?>
            <div data-src="images/page-1_slide1.jpg">
              <div class="camera_caption fadeIn">
                <div class="jumbotron jumbotron1">
                  <em>
                  <a href="detalle.php?id=<?php echo $row['id'] ?>" class="btn-link fa-angle-right"><?php echo $row['titulo_noticia'] ?></a>
                  </em>
                  <div class="wrap">
                    <p>
                      <?php echo $row['resumen_noticia'] ?>
                    </p>
                    <a href="detalle.php?id=<?php $row['id'] ?>" class="btn-link fa-angle-right"></a>
                  </div>  
                </div>
              </div>
            </div>
          
  <?php
    }
  }
  ?>

          </div>
        </div>
      </section>
      
      <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
        <div class="container">
        <h2 class="txt-pr">
        Quienes Somos
        </h2>
          <div class="row">
            <div class="col">
              <p style="text-align:justify">
                <?php echo $empresa["quienes_somos"] ?>
              </p>
            </div>
          </div>
        </div>
      </section>

    </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer class="top-border">
	<section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
        <div class="container">
        <h2 class="txt-pr">
        Dónde estamos
        </h2>
        </div>
    </section>
	<div class="map">
      <iframe src="https://www.google.com/maps/@?api=1&map_action=map&center=<?php $empresa["latitud"] ?>%2C<?php $empresa["longitud"] ?>&zoom=12" width="1600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <section class="well1">
      <div class="container"> 
            <p class="rights">
              Denominación Empresa  &#169; <span id="copyright-year"></span>
              <a href="index-5.html">Privacy Policy</a>
              <!-- {%FOOTER_LINK} -->
            </p>          
      </div> 
    </section>    
  </footer>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->
  <script>
      function cambiarTitulo(nuevoTitulo) {
          document.getElementById("tituloPestana").innerHTML = nuevoTitulo;
      }
      cambiarTitulo("<?php echo 'HOME'; ?>");
  </script>

  </body>
</html>
