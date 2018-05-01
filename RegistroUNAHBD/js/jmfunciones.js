
$(document).ready(function(){
$.ajax({
 url:"ajax/getInfo.php?accion=centroEstudio",
        data:"",
        method:"POST",
        success:function(respuesta){

          $("#slc-centroEstudio").html(respuesta);
        },
        error:function(e){

           console.log(e);
        }

 });

});


$("#slc-centroEstudio").click(function(){

        var parametro = "slc-centroEstudio="+ $('#slc-centroEstudio').val();
		$.ajax({
 		url:"ajax/getInfo.php?accion=departamentos",
        data:parametro,
        method:"POST",
        success:function(respuesta){

          $("#departamento").html(respuesta);
        },
        error:function(e){

           console.log(e);
        }

 });
   
  	$.ajax({
 		url:"ajax/getInfo.php?accion=ciudades",
        data:parametro,
        method:"POST",
        success:function(respuesta){

          $("#ciudad").html(respuesta);
        },
        error:function(e){

           console.log(e);
        }

 });

});