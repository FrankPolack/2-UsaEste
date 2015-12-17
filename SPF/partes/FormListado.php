<?php 

require_once("clases/AccesoDatos.php");
require_once("clases/datos.php");
if(isset($_SESSION['nombre']))
{
	
	$arrayDatos= datos::TraerDatos();

	echo "<h2> Bienvenido: ".$_SESSION['nombre']."</h2>";

?>

<table class="table"  style="background-color: beige;">
	<thead>
		<tr>
			
			<th>Editar</th>
			<th>Borrar</th>
			<th>Ver</th>
			<th>id</th>
			<th>localidad</th>
			<th>num</th>
			<th>calle</th>

		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDatos as $dato) {
	$l = '"'.$dato->localidad. '"'.',"'.$dato->calle. '"'.',"'.$dato->num. '"'.',"'.$dato->id. '"';
	//$l='"'.$dato->localidad. '"' . ',"' .$dato->num. '"' . ',"' .$dato->calle. '"' . ',"' .$dato->id. '"';
	echo"<tr>
		
		<td><a onclick='EditarDATO($dato->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
		<td><input type='button' value='Borrar' onclick='BorrarDATO($dato->id)' class='btn btn-danger' href='location.partes/FormListado.php'></td>
		<td><a onclick='VerEnMapa($l)' class='btn btn-info'>Ver mapa</a></td>
		
        <td>$dato->id</td>
		<td>$dato->localidad</td>
		<td>$dato->num</td>
		<td>$dato->calle</td>
	    

	</tr>";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4>No ha ingresado</h4>";
	}

	 ?>