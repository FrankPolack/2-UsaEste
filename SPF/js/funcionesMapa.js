function VerEnMapa(calle, num, loca, id)
{
    var punto = loca +", " +  calle  +", " +  num +", Buenos Aires , Argentina";
    console.log(punto);
    var funcionAjax=$.ajax({
		url:"operaciones.php",
		type:"post",
		data:{
			queHago:"VerEnMapa"
		}
	});
    funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
        $("#punto").val(punto);
        $("#id").val(id);
	
	Geolocalizacion.Marcador.iniciar();
	Geolocalizacion.Marcador.verMarcador();	
	});
}
