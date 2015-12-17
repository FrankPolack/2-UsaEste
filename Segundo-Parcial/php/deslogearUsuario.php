<?php 
session_start();

	$_SESSION['registrado']=null;
    setcookie("hoy","");
             
session_destroy();

 ?>