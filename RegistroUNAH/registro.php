<?php
  include('config/core.php');
  
  	$queryCentroEstudio = oci_parse($conexion, 'SELECT nombreCentro FROM tbl_centroestudio');
	oci_execute($queryCentroEstudio);

	while ($row = oci_fetch_array($queryCentroEstudio, OCI_ASSOC+OCI_RETURN_NULLS)) {
    	foreach ($row as $item) {
        	$centroEstudio[] = $item;
    	}
    	$smarty->assign("centroEstudio", $centroEstudio);
    }
	
  
  $smarty -> display('registro.tpl');
?>