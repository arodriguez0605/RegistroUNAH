<?php  

	include("../class/class-conexion.php");
	$conexion = new Conexion();
	
	switch($_GET["accion1"]) {
		
		case'guardar':
			include("../class/class-estudiante.php");
			$Estudiante = new Estudiante($_POST["txt-pnombre"],$_POST["txt-snombre"],
										 $_POST["txt-papellido"],$_POST["txt-sapellido"],
										 $_POST["txt-cuenta"],$_POST["txt-correoelectronico"],
										 $_POST["txt-direccion"],$_POST["txt-telefono"],
										 $_POST["txt-password"],$_POST["txt-fechanacimiento"],
										 $_POST["slc-centroEstudio"],$_POST["txt-fechaingreso"]);
			
			echo $_POST["slc-centroEstudio"];
			$Estudiante->guardarEstudiante($conexion);
			break;

			default:
			 	echo 'Opcion invalida.';
			 break;
		}

?>