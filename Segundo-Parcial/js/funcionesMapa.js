function VerEnMapa(calle, numCasa, loc, id)
{
    alert(calle + numCasa +  loc);
   
    var punto = calle +", " +  numCasa  +", " +  loc +",BuenosAires"+",Argentina";
    console.log(punto);
    
    var funcionAjax=$.ajax({
    url:"nexo.php",
    type:"post",
    data:{
      queHacer:"VerEnMapa"
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