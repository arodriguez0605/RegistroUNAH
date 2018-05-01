<?php
	include('config/core.php');


	$queryUsuario = oci_parse($conexion, 'SELECT pnombre FROM tbl_persona WHERE codigopersona=1');
	oci_execute($queryUsuario);

	while ($row = oci_fetch_array($queryUsuario, OCI_ASSOC+OCI_RETURN_NULLS)) {
    	foreach ($row as $item) {
        	$nombreUsuario[] = $item;
    	}
    	$smarty->assign("nombreUsuario", $nombreUsuario);
    }
	
	$smarty -> display('index.tpl');
?>