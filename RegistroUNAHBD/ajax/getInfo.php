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
		default:
			echo "Acción inválida";
			break;
	}
	$conexion->cerrarConexion();
?>