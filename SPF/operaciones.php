<?php 
session_start();
	
	require_once("clases/AccesoDatos.php");
	require_once("clases/datos.php");

	$queHago = $_POST['queHago'];

	switch ($queHago) {
			case 'MostrarIngreso':
				include("partes/FormIngreso.php");
				break;
			
			case 'MostrarFrmDatos':
				include("partes/FormDatos.php");
				break;
            
            case 'VerEnMapa':
				include("partes/formMapa.php");
				break;
			
			case 'MostrarListado':
				include("partes/FormListado.php");
				break;	

			case 'altaDato':
				$dato = new datos();
				$dato->id=$_POST['id'];
				$dato->localidad=$_POST['localidad'];
				$dato->num=$_POST['num'];
				$dato->calle=$_POST['calle'];
				
			    if ($_POST['id']> 0)
			    {
			       $cantidad=$dato->ModificarDatos();	
			    }
			    else
			    {
			    	$cantidad=$dato->InsertarDatos();
			    }
				echo $cantidad;

				if(!isset($_COOKIE['count']))
               {
                 //$_COOKIE['count']=1;
                 $cookie= 1;
                 setcookie("count", $cookie);   
               }
               else
               {  
                 $cookie = $_COOKIE['count']+ 1;
                 setcookie("count", $cookie); 

                 //echo "Votos ".$_COOKIE['count'];
               }
               echo $cookie;
               
				break;

			case 'borrarDato':
				$dato = new datos();
				$dato->id = $_POST['id'];
				$dato->BorrarDatos();
				break;

			case 'TraerDato':
				$resultado = datos::TraerUnDato($_POST['id']);
				echo json_encode($resultado);

			default:
				# code...
				break;
		}	

?>