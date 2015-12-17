function BorrarUSUARIO(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarUSUARIO",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostarListado");
		//alert("borrado");
	});

}
function BorrarFOTO(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarFOTO",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostarListado");
		//alert("borrado");
	});

}

function EditarUSUARIO(idParametro)
{
	Mostrar("MostrarPerfil");

	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"Traer",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		
		//console.log(retorno);
		var usr =JSON.parse(retorno);	
		//alert(voto.dni);

		$("#idUSUARIO").val(usr.id);
		$("#calle").val(usr.calle); 
		$("#numCasa").val(usr.numCasa);

		$("#localidad").val(usr.localidad);
	});

	//Mostrar("MostrarVotacion");
}

function GuardarUSUARIO()
{ 
 		var id = $("#idUSUARIO").val();
		var localidad = $("#localidad").val(); 
		var calle = $("#calle").val();
		var numCasa = $("#numCasa").val();

		var funcionAjax = $.ajax({	
		url:"nexo.php", 
		type:"post",
		data:
		{
		queHacer: "GuardarUSUARIO",
		id:id,
		localidad:localidad,
	    calle:calle,
	    numCasa:numCasa
		}
		
	});
	funcionAjax.done(function(retorno){
		console.log(retorno);
		Mostrar("MostarListado");	 	
	});

}

//--