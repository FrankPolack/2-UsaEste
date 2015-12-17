function Login()
{
	var nombre =$("#nombre").val();
	var funcionAjax =$.ajax({
    	
        url:"php/sesion.php", 
        type:"post",
    	data:{nombre:nombre}
    });

    funcionAjax.done(function(retormo){
    	
        if (retorno)
        {  alert("Bienvenido");
            var fecha = new Date();
    		
            MostarIngreso();     
            $("#fecha").html(fecha.getDate() + "-" + fecha.getMonth() + "-" + fecha.getFullYear());
        }
    	else
        { 
    		alert("No ingreso");
        }
    });
}

function Logout()
{
	var funcionAjax=$.ajax({
		url:"php/logout.php" ,
        type:"post",
     });
	funcionAjax.done(function(retorno){
        

         MostarIngreso();
        
        $("#Contador").html(""); //esto destruye la cookie
    });
}