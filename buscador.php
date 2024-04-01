<?php //include 'header.php';
include 'conexion.php';
$resultado;
$conn = conexion();
$busqueda = $_GET['buscar'];
$sql = "SELECT * FROM noticia WHERE titulo_noticia LIKE '%$busqueda%' OR resumen_noticia LIKE '%$busqueda%'";
if($conn != null) {
    $resultado = $conn->query($sql);
}?>
<!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
		
        <div class="container">
			
          <h2>
            <?php echo $busqueda ?>
          </h2>
          <div class="row offs2">
            <table width="90%" align="center">
              <tbody>
              <?php if($resultado->num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
              ?>
                <tr>
                  <td>
                    <a href="baseNoticias.php">
                      <img width="250px" class="imgNoticia" src="http://localhost:82/template_html/images/page-1_slide1.jpg?1583775512626" alt="">
                    </a>
                  </td>
                  <td width="25"></td>
                  <td style="text-align:justify;" valign="top">
                    <a style="text-align:justify; font-size:20px" href="baseNoticias.php" class="banner">
                      <?php echo $row['titulo_noticia']; ?>									</a>
                    <div class="verOcultar">
                      <?php echo $row['resumen_noticia']; ?><a href="baseNoticias.php?id=<?php echo $row['id_empresa'] ?>" style="color:blue"> Leer Mas - <?php echo $row['fecha_publicacion'] ?></a>											
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <hr>
            <?php
              }
            }
            ?>
            
                </div>
              </div>
            </section>   
            

          </main>

    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
   <section class="well">
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

<!-- coded by vitlex -->

  </body>
</html>
