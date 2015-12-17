<?php
 if (!isset($_SESSION['nombre'])) {
 	# code...
 ?>
<form onsubmit ="Login(); return false">
	
	<h3>Ingrese su Nombre:</h3><br>
	<input type="text"  required id="nombre" placeholder="Nombre">
	<input type="submit" class="btn btn-info" value="Ingresar">
	
</form>
<?php }
else
 {
    echo"<h3> usted '".$_SESSION['nombre']."' esta logeado. </h3>";?> 
 
    <button onclick="Logout()" class="btn btn-info" type="button" >Cerrar Sesion</button>

 <?php } ?>


