
$(document).ready(function(){
$.ajax({
 url:"JM/getInfo.php?accion=departamentos",
        data:"",
        method:"POST",
        success:function(respuesta){

          $("#slc-departamentos").html(respuesta);
        },
        error:function(e){

           console.log(e);
        }

 });

});