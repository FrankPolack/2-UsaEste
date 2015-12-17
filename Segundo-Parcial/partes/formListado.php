<?php 

if(isset($_SESSION['registrado']))
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/persona.php");
	require_once("clases/usuario.php");

	$arrayPersona=persona::TraerUsuario();

	$arrayFoto=usuario::TraerFoto();

	echo "<h2> Bienvenido: ".$_SESSION['registrado']."</h2>";

 ?>

<script type="text/javascript">
$("#content").css("width", "900px");
</script>

<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>localidad</th><th>calle</th><th>numCasa</th><th>Ver</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayPersona as $persona) {

    $l = '"'.$persona->calle. '"'.',"'.$persona->numCasa. '"'.',"'.$persona->localidad. '"'.',"'.$persona->id. '"';
    
	echo"<tr>
			<td><a onclick='EditarUSUARIO($persona->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarUSUARIO($persona->id)' class='btn btn-danger'> <span class='glyphicon glyphicon-trash'>&nbsp;</span>Borrar</a></td>
			
			<td>$persona->localidad</td>
			<td>$persona->calle</td>
            <td>$persona->numCasa</td>

            <td><a onclick='VerEnMapa($l)' class='btn btn-info'>Ver mapa</a></td>         
			
		</tr>   ";

}
		 ?>
	</tbody>
</table>

<table class="table"  style=" background-color: beige;">
	<h4>Fotos Cargadas</h4>
	<thead>
		<tr>
			<th>Borrar</th><th>Nombre</th><th>Foto</th>
		</tr>
	</thead>
	<tbody>

		<?php 

			foreach ($arrayFoto as $usuario)
			{
				echo "<tr>

					 <td><a onclick='BorrarFOTO($usuario->id)' class='btn btn-danger'> <span class='glyphicon glyphicon-trash'>&nbsp;</span>Borrar</a></td>

					 <td>$usuario->nombre</td>	
					 <td><img src=Fotos/$usuario->foto heigth=80 width=80></td> 

					 </tr>";
			}	

		 ?>
	</tbody>
</table>


<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?> 