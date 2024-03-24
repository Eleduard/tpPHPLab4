  <!--========================================================
                            CONTENT
  =========================================================-->
  <?php include 'header.php'; ?>
    <main> 
  <?php
  $conn = conexion();
  $sql = "SELECT * FROM noticia";
  if($conn != null) {
      $resultado = $conn->query($sql);
  }
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
      
      <section class="well well2 wow fadeIn  bg1" data-wow-duration='3s'>
        <div class="container">
        <h2 class="txt-pr">
        Quienes Somos
        </h2>
          <div class="row">
            <div class="col">
              <p style="text-align:justify">
                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11270.125646913215!2d-68.83492456656404!3d-32.88154997304907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1615335513448!5m2!1ses-419!2sar" width="1600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
