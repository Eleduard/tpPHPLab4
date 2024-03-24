<?php include 'header.php';
$id = $_GET['id']; 
$conn = conexion();
$sql = "SELECT * FROM noticia WHERE id='$id'";
if($conn != null) {
    $resultado = $conn->query($sql);
}
$registro = $resultado->fetch_assoc();
?>
<!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well4">
		
        <div class="container">
			<center>
				<div id="imagenPrincipal" style="height: 450px; background-image: url('http://localhost:82/template_html/images/page-1_slide1.jpg?1583775512626'); background-repeat: no-repeat;background-size: cover;">
					<div style="text-align:left; background-color: rgba(1,1,1,0.5);color: #ffffff;font-size: 16px;line-height: 50px;">
					 <?php $registro['id'] ?>                       
					</div>
				</div>
			</center>
		  <h2>
            <?php echo $registro['titulo_noticia']; ?>
          </h2>
		  <?php echo $registro['fecha_publicacion']; ?>
		  <hr>
          <div class="row offs2">
            
            <div class="col-lg-12">
              <dl class="terms-list">
                <dt>
					<?php echo $registro['resumen_noticia']; ?>
                </dt>
				<hr>
                <dd>
					<?php echo $registro['contenido_html']; ?>
				</dd>
              </dl>
            </div>
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
    <script>
      function cambiarTitulo(nuevoTitulo) {
        document.getElementById("tituloPestana").innerHTML = nuevoTitulo;
      }
      cambiarTitulo("<?php echo 'DETALLE'; ?>");
    </script>
    <script src="https://cdn.tiny.cloud/1/470vl6oydu4y113xe2muphz55fln53vldzpewunxn0v858qz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  </body>
</html>
