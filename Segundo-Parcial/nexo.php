<?php 
session_start();

require_once("clases/AccesoDatos.php");
require_once("clases/persona.php");
require_once("clases/usuario.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	
	case 'MostarListado':
			include("partes/formListado.php");
		break;
	case 'MostrarPerfil':
			include("partes/formPerfil.php");
		break;
	case 'MostarIngreso':
			include("partes/formIngreso.php");
		break;
	case 'MostarFoto':
			include("partes/formFoto.php");
		break;	

	case 'BorrarUSUARIO':
			$persona = new persona();
			$persona->id=$_POST['id'];
			$cantidad=$persona->Borrar();
			echo $cantidad;
		break;
		
	case 'BorrarFOTO':	
			$usuario = new usuario();
			$usuario->id=$_POST['id'];
			$cantidad=$usuario->BorrarFoto();
			echo $cantidad;
		break;
			
	case 'GuardarUSUARIO':
			$persona = new persona();
			$persona->id = $_POST['id'];
			//$persona->dni = $_SESSION['registrado']; 
			$persona->localidad = $_POST['localidad'];
			$persona->calle = $_POST['calle'];
			$persona->numCasa = $_POST['numCasa'];

			 if ($_POST['id']>0)
			 {
			 	$cantidad=$persona->ModificarUsuarios(); 
			 }
			 else
			 {
			 	echo "ins";
			 	$cantidad=$persona->InsertarUsuarios();
			 }
			 echo $cantidad;
        
        //ver aca

		break;	
	
	case 'Traer':
			$resultado = persona::Traer($_POST['id']); 	
			echo json_encode($resultado);	
		break;

	case 'VerEnMapa':
           include("partes/formMapaGoogle.php");
		break;
	
	case 'guardarMarcadores':
        //session_start();
        if(isset($_POST["marcadores"]))
        {
            $filename = "ArchivosTxt/marcadores" . getdate()[0] . ".txt"; //creo una carpeta en el proy para q se guarde el marcador

            $_SESSION['file'] = $filename;
            $puntos = $_POST["marcadores"];

            $file = fopen($filename, "w");

            foreach ($puntos as $valor)
            {
                $lat =  $valor["lat"];
                $lng =  $valor["lng"];
                $nombre =  $valor["nombre"];
                fwrite($file, $lat.">".$lng.">".$nombre . PHP_EOL);
            }
        fclose($file);

        echo "Marcadores guardados con exito";
        }
        else
            echo "No ingreso marcador/es a guardar";
        break;	
	
}

?>