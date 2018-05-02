
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


	$.ajax({
 url:"ajax/getInfo.php?accion=carreras",
        data:"",
        method:"POST",
        success:function(respuesta){

          $("#slc-carreras").html(respuesta);
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





$("#btn-iniciar-sesion-estudiante").click(function(){

	if ($("#txt-cuenta").val()) {

		if ($("#txt-password").val()) {

					 var parametros = "txt-cuenta="+$("#txt-cuenta").val()+"&"+"txt-password="+$("#txt-password").val();

       						$.ajax({
        					url:"ajax/gestion-usuario.php?accion=login",
       						 data: parametros,
       						 method:"POST",
        					
        					success:function(respuesta){
        						
        					$("#div-prueba").html(respuesta);	
        					alert(respuesta);
         					if(respuesta.estatus==1)
         						{
          							alert("regreso.");
           						 
             					 window.location = "matriculaPrincipal.php";
            						
						         }
         						else
           							{
            							alert("usuario no encontrado.");
           							}
        						},

        						error:function(e){
         						 $("#div-prueba").html(e);
         						 console.log(e);
         						 
       							 }

       							});
     							 }
     						 }
	else{
		alert("ingrese datos.");
	}

});



$("#slc-carreras").click(function(){

        var parametro = "slc-carreras="+$('#slc-carreras').val();
		$.ajax({
 		url:"ajax/getInfo.php?accion=facultades",
        data:parametro,
        method:"POST",
        success:function(respuesta){

          $("#facultad").html(respuesta);
        },
        error:function(e){

           console.log(e);
        }

 });

 });



$("#btn-registrarse").click(function(){



if($("#txt-pnombre").val())
{    
	if($("#txt-papellido").val()){

	  if($("#txt-cuenta").val()){

	  	if($("#slc-centroEstudio").val()){
        var parametro = 
        "txt-pnombre="+$("#txt-pnombre").val()+"&"+
        "txt-snombre="+$("#txt-snombre").val()+"&"+
        "txt-papellido="+$("#txt-papellido").val()+"&"+
        "txt-sapellido="+$("#txt-sapellido").val()+"&"+
		"txt-cuenta="+$("#txt-cuenta").val()+"&"+
		"txt-correoelectronico="+$("#txt-correoelectronico").val()+"&"+
		"txt-direccion="+$("#txt-direccion").val()+"&"+
        "txt-telefono="+$("#txt-telefono").val()+"&"+
        "txt-password="+$("#txt-password").val()+"&"+
        "txt-fechanacimiento="+$("#txt-fechanacimiento").val()+"&"+
        "slc-centroEstudio="+$("#slc-centroEstudio").val()+"&"+
        "txt-ciudad="+$("#ciudad").val()+"&"+
        "txt-departamento"+$("#departamento").val()+"&"+
        "slc-carreras="+$("#slc-carreras").val()+"&"+
        "txt-facultdad="+$("#facultad").val()+"&"+
        "txt-fechaingreso="+$("#txt-fechaingreso").val()+"&"+"accion1 = guardar";
		
		$.ajax({		
 		url:"ajax/gestion-estudiante.php?accion1=guardar",
        data:parametro,
        method:"POST",
        success:function(respuesta){

          alert(respuesta);
        },
        error:function(e){

           console.log(e);
        }

    });
	  }
	  else{

              alert("Seleccione un centroEstudio.");
	   }

	  }

	  else{alert("Ingrese Un numero de Cuenta.");}
    }
     else{
     	alert("Ingrese Primer Apellido.");
     }
 }
  else{alert("Ingrese Primer Nombre");}
 });


