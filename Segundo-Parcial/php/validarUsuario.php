<?php

session_start();

require_once("../clases/persona.php");//sube un nivel

$recordar=$_POST['recordarme'];


if($_POST['usuario']=="jose" || $_POST['usuario']=="maria")
{
			  //usuarioActual	
	$_SESSION['registrado']=$_POST['usuario'];
	setcookie("hoy",date("Y-m-d"));
	//echo date("Y-m-d");

	if($recordar=="true")
	{
		setcookie("registro",$_POST['usuario'],  time()+36000 , '/');
	}
	else
	{
		setcookie("registro",$_POST['usuario'],  time()-36000 , '/');
	}

	echo "correcto";
}
else
{
	echo "no-esta";
}

?>