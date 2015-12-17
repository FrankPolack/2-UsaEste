<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

<html>
<head>
  <title></title>

<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.js"></script> 
<script src="js/jsRegistroJquery.js"></script>

</head>
<body>

<?php
//session_start();
       
  if (isset($_SESSION['registrado']))
  {
  
?>

<form id="frmRegistro" class="form-votacion" id="principal" ><!--onsubmit="GuardarUSUARIO();return false">-->
   
  <label>Cargar Foto</label><br><br>

  <input type="text"  id="nombre" class="form-control" placeholder="Nombre" > 

  Foto<input class="form-control btn btn-info"  name="fichero" type="file" id="fichero">
  <span id="error" class='error1' style="display: none;"></span>
  Preview<img  name="imagen" id="imagen" src="" alt="Imagen aqui" width="280" height="250">
         
  
  <input readonly type="hidden" id="idFOTO" class="form-control" >

  <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button> 

</form>

<?php 
  }else
  {
    echo "<section class='widget'>
      <h4 class='widgettitle'>No estas registrado</h4></section>";
  }

?>

</body>
</html>