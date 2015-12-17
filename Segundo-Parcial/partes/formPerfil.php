
<?php
//session_start();
       
  if (isset($_SESSION['registrado']))
  {
    
?>

<form class="form-votacion" id="principal" onsubmit="GuardarUSUARIO();return false">
   
  <label>PERFIL</label><br>

	<select name="localidad" id="localidad">

    <option value="Avellaneda">Avellaneda</option>
    <option value="Lanus">Lanus</option>
 
	</select><br><br>

  <input type="text" name="calle" id="calle" placeholder="calle"><br><br>

  <input type="text" name="numCasa" id="numCasa" placeholder="numCasa"><br><br>
     
  <input readonly type="hidden" id="idUSUARIO" class="form-control" >

  <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button> 

</form>

<?php 
  }else
  {
    echo "<section class='widget'>
      <h4 class='widgettitle'>No estas registrado</h4></section>";
  }

?>
