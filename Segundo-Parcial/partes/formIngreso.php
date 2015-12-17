<?php 
 
//session_start();

if(!isset($_SESSION['registrado'])){  ?>

<form  class="form-ingreso " onsubmit="validarLogin();return false;">
   
    <h2 class="form-ingreso-heading">Ingrese</h2><br>

    <label for="nombre" class="sr-only">nombre</label>
    <input type="text" name="nombre" id="nombre" minlength="4" class="form-control" placeholder="nombre" required=""><br>
    
	 <div class="checkbox">
	      <label>
	        <input type="checkbox" id="recordarme" checked> Recordarme
	      </label>
	 </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
     
</form>

 <?php }else{ echo"<h3>usted '".$_SESSION['registrado']."' esta registrado. </h3>";?>         
   
    <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Cerrar Sesion</button>


  <?php  }  ?>


 
    
  
