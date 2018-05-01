<?php
include('config/core.php');

// get the q parameter from URL
$q = $_REQUEST["q"];

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $queryCodigoCiudad = oci_parse($conexion, "SELECT codigociudad FROM tbl_centroestudio WHERE nombreCentro='".$q."'");
  oci_execute($queryCodigoCiudad);

  while ($row = oci_fetch_array($queryCodigoCiudad, OCI_ASSOC+OCI_RETURN_NULLS)) {
      foreach ($row as $item) {
          $codigoCiudad = $item;
      }
    }

    $queryCiudad = oci_parse($conexion, "SELECT nombreciudad FROM tbl_ciudad WHERE codigociudad=".$codigoCiudad."");
  oci_execute($queryCiudad);

  while ($row = oci_fetch_array($queryCiudad, OCI_ASSOC+OCI_RETURN_NULLS)) {
      foreach ($row as $item) {
          $nombreCiudad = $item;
      }
        echo $nombreCiudad;
    }

   
}

?> 