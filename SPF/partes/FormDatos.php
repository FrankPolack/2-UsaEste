<?php
 //session_start();
 
 if (isset($_SESSION['nombre']))
 {
?>
	
<form onsubmit="GuardarDATO();return false">

		<select name="localidad" id="localidad">
			<option value="Avellaneda">Avellaneda</option>
			<option value="Lanus">Lanus</option>
		</select><br>
		
		<input type="text" name="calle" id="calle" placeholder="Calle"><br>

        <input type="text" name="num" id="num" placeholder="Numero de casa"><br><br>

        <input type="hidden" id="idDATO">
		
		<input type="submit" class="btn btn-info" value="Guardar">
		

</form>
 
<?php
}else
{

echo "<h4>No ha ingresado</h4>";
  
}
?>
