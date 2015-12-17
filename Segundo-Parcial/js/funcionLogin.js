
 function validarLogin()
    {

        	var elUsuario=$("#nombre").val(); //nombreUsuario
            var recordar=$("#recordarme").is(':checked');

        	var funcionAjax =$.ajax({
        		url:"php/validarUsuario.php", 
        		type:"post",
        		data:
        			{
        			usuario:elUsuario,
                    recordarme:recordar
        			}
        		});

        	funcionAjax.done(function(respuesta){
                
                console.log(respuesta); 
        		if(respuesta=="correcto") //!=no-esta .trim para sacar espacio
        		{
                    var fecha = new Date();
                    //console.log(fecha);
        			alert("Bienvenido");
					MostarIngreso();	 
                    $("#fecha").html(fecha.getDate() + "-" + fecha.getMonth() + "-" + fecha.getFullYear());
        		}
        		else
        		{
        			alert("No esta registrado");
        		}
               
                
		});

    }

function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){

			MostarIngreso();
			$("#fecha").html("");
	});	
}