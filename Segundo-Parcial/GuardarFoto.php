<?php
session_start();
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");

									//
	if($_POST['nombre']  && isset($_POST['idFOTO']))
	{
		       
		//$_SESSION['registrado']=$_POST['nombre'];
		$email = $_POST['nombre'];
		//
		$ruta=getcwd();  //ruta directorio actual
		$rutaDestino=$ruta."/Fotos/";
		$NOMEXT=explode(".", $_FILES['fichero0']['name']);
		$EXT=end($NOMEXT);
		$nomarch=$NOMEXT[0].".".$EXT;  // no olvidar el "." separador de nombre/ext
		$rutaActual = $ruta."/FotosTemp/".$nomarch;
		$nuevoNombreDeFoto = $email.".".$EXT;
		//Renombro con el email/usuario
		     rename ($ruta."/FotosTemp/".$nomarch,$ruta."/FotosTemp/".$nuevoNombreDeFoto);
		     $rutaActual = $ruta."/FotosTemp/".$nuevoNombreDeFoto;
		     echo $nomarch;
		     echo "	</br>"; //
		     echo $rutaActual;
		     echo "	</br>";
		     echo $rutaDestino.$nuevoNombreDeFoto;
		     echo "	</br>";
		       //Muevo a carpeta Fotos
			rename($rutaActual,$rutaDestino.$nuevoNombreDeFoto);
		      //

		    $usuario = new usuario();
			$usuario->id=$_POST['idFOTO'];
			$usuario->nombre=$_POST['nombre'];

		    $usuario->foto=$nuevoNombreDeFoto;

		    $cantidad=$usuario->GuardarFoto();
		    echo $cantidad;
			
		    echo "Foto Guardada con éxito en carpeta Fotos del servidor";
		        //Guardar usuario en BD
	}
		    
		else
		{
		   	echo "Error: Debe ingresar todos los campos";
		}

?>