<?php 
	include("../class/class-conexion.php");
	$conexion = new Conexion();
	switch ($_GET["accion"]) {
		case 'departamentos':
			include("../class/class-departamentos.php");
			Departamento::obtenerDepartamentos($conexion);
			break;	
		default:
			echo "Acción inválida";
			break;
	}
	$conexion->cerrarConexion();
?>