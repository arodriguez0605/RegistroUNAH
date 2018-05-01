<?php 
	include("../class/class-conexion.php");
	$conexion = new Conexion();
	switch ($_GET["accion"]) {
		
		case 'departamentos':
			include("../class/class-departamentos.php");
			Departamento::obtenerDepartamentos($conexion,$_POST["slc-centroEstudio"]);
			break;	
		
		case'centroEstudio':
		 include("../class/class-centroEstudio.php");
		 CentroEstudio::obtenerCentros($conexion);
		break;	
		
		case 'ciudades':
		include('../class/class-ciudad.php');
		Ciudad::obtenerCiudades($conexion,$_POST["slc-centroEstudio"]);
		break;

		case 'carreras':
		include('../class/class-carrera.php');
		Carrera::obtenerCarreras($conexion);
		break;

		case 'facultades':
			include('../class/class-facultad.php');
			Facultad::obtenerFacultad($conexion,$_POST["slc-carreras"]);
			break;

		default:
			echo "Acción inválida";
			break;
	}
	$conexion->cerrarConexion();
?>