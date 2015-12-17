<?php
 
 session_start();
 $retorno;

if($_POST["nombre"]=="Jose" || $_POST["nombre"]=="Maria" )
{			
	
    $_SESSION['nombre']=$_POST["nombre"];
    setcookie("hoy",date("Y-m-d"));
	
	if($recordar=="true")
	{
		setcookie("nombre",$nombre,  time()+36000 , '/');
		
	}else
	{
		setcookie("nombre",$nombre,  time()-36000 , '/');
		
	}
	
	$_COOKIE['ingreso']=getdate();
	$retorno=" ingreso";
	
}else
{
	$retorno= "No-esta";
}
echo $retorno;
?>



 

