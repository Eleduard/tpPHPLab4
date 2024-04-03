<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/470vl6oydu4y113xe2muphz55fln53vldzpewunxn0v858qz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  
  tinymce.init({
  selector: 'textarea#editorHtml',
  plugins: 'print preview fullpage paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  autosave_interval: "30s",
  autosave_prefix: "{path}{query}-{id}-",
  autosave_restore_when_empty: false,
  autosave_retention: "2m",
  image_advtab: true,
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ],
  link_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_list: [
    { title: 'My page 1', value: 'http://www.tinymce.com' },
    { title: 'My page 2', value: 'http://www.moxiecode.com' }
  ],
  image_class_list: [
    { title: 'None', value: '' },
    { title: 'Some class', value: 'class-name' }
  ],
  importcss_append: true,
  height: 400,
  file_picker_callback: function (callback, value, meta) {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
      callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
    }

    /* Provide image and alt text for the image dialog */
    if (meta.filetype === 'image') {
      callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
    }

    /* Provide alternative source and posted for the media dialog */
    if (meta.filetype === 'media') {
      callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
    }
  },
  templates: [
        { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
    { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
    { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
  ],
  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
  height: 600,
  image_caption: true,
  quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  noneditable_noneditable_class: "mceNonEditable",
  toolbar_drawer: 'sliding',
  contextmenu: "link image imagetools table",
 });

  
  </script>
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <?php include 'conexion.php';
    if($_GET["id"] != null) {
      $id = $_GET['id'];
      $conn = conexion();
      $sql = "SELECT * FROM noticia WHERE id = " . $id;
      $resultado = $conn->query($sql);
      if($resultado->num_rows > 0) {
        $registro = $resultado->fetch_assoc();
      } 
    } else {
      $registro["id"] = null;
      $registro['titulo_noticia'] = "";
      $registro["resumen_noticia"] = "";
      $registro["imagen_noticia"] = "";
      $registro["fecha_publicacion"] = "";
      $registro["contenido_html"] = "";
    }
  ?>
    
      <form action="guardar.php" method="POST">
      <div>
        <input type="number" name="id" id="id" value="<?php echo $registro["id"]; ?>" style="display: none;">
        <input type="number" name="idEmp" id="idEmp" value="<?php echo $_GET["idEmp"]; ?>" style="display: none;">
      </div>
      <table class="table">
        <tr>
          <td style="width: 10%;"><label for="titulo">Titulo</label></td>
          <td style="width: 40%;"><input type="text" style="width: 100%" name="titulo" id="titulo" value="<?php echo $registro["titulo_noticia"]; ?>"/></td>
          <td style="width: 10%;"><label for="fecha">Fecha de publicación</label></td>
          <td style="width: 40%;"><input style="height: 35px;" type="date" name="fecha" id="fecha" value="<?php echo $registro["fecha_publicacion"]; ?>"/></td>
        </tr>
        <tr>
          <td style="width: 10%;"><label for="resumen">Resumen</label></td>
          <td style="width: 40%;"><input type="textarea" style="width: 100%" name="resumen" id="resumen" value="<?php echo $registro["resumen_noticia"]; ?>"/></td>
          <td style="width: 10%;"><label for="imagen">Imagen</label></td>
          <td style="width: 40%;"><input type="text" name="imagen" id="imagen" value="<?php echo $registro["imagen_noticia"]; ?>"/></td>
        </tr>
      </table>
      <textarea id="editorHtml" name="editorHtml"><?php echo $registro["contenido_html"]; ?>"</textarea>
      <button onclick="verHTML()">VER HTML</button>
      <input type="submit" value="Guardar" />
      </form>

    
</body>
<script>
function verHTML(){
	var content = tinymce.get("editorHtml").getContent();
	alert(content);
}
function btnGuardar() {
  var id = document.getElementById("id").value;
  var titulo = document.getElementById("titulo").value;
  var resumen = document.getElementById("resumen").value;
  var imagen = document.getElementById("imagen").value;
  var fecha = document.getElementById("fecha").value;
  var editorHtml = document.getElementById("editorHtml").value;
  if(id!=null) {
    location.href = "actualizar.php?id=" + id + "&titulo=" + titulo + "&resumen=" + resumen + "&imagen=" + imagen +
                    "&fecha=" + fecha + "&editorHtml=" + editorHtml;
  } else {
    location.href = "guardar.php";
  }
}
</script>  
</html>
