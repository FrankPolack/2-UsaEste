function BorrarDATO(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"operaciones.php",
		type:"post",
		data:{
			id:idParametro,
				queHago:"borrarDato"
		}
	});
	funcionAjax.done(function(retorno){
		alert("Borrado correctamente");
		Mostrar("MostarListado");
		//alert("borrado");
	});

}

function EditarDATO(idParametro)
{
	Mostrar("MostrarFrmDatos");

	var funcionAjax=$.ajax({
		url:"operaciones.php",
		type:"post",
		data:{
			queHago:"TraerDato",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		
		console.log(retorno);
		var dato =JSON.parse(retorno);	
		//alert(voto.dni);

		$("#idDATO").val(dato.id); 
		$("#localidad").val(dato.localidad);
		$("#num").val(dato.num);
		$("#calle").val(dato.calle); 
	});
 }

function GuardarDATO()
{       
 		var id=$("#idDATO").val();
 		var localidad=$("#localidad").val();
 		var num=$("#num").val();
		var calle=$("#calle").val();

		var funcionAjax=$.ajax({	
		url:"operaciones.php", 
		type:"post",
		data:
		{
		queHago:"altaDato",
		id:id,
		localidad:localidad,
		num:num,
		calle:calle
		}
		
	});
	funcionAjax.done(function(retorno){
		console.log(retorno);
		Mostrar("MostarListado");	 
				$("#Contador").html("Votos " + retorno); 
	});

}