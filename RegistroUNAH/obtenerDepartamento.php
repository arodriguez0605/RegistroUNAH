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
    }

    $queryCodigoDepartamento = oci_parse($conexion, "SELECT codigodepartamento FROM tbl_ciudad WHERE codigociudad=".$codigoCiudad);
  oci_execute($queryCodigoDepartamento);

  while ($row = oci_fetch_array($queryCodigoDepartamento, OCI_ASSOC+OCI_RETURN_NULLS)) {
      foreach ($row as $item) {
          $codigoDepartamento = $item;
      }
    }

    $queryDepartamento = oci_parse($conexion, "SELECT nombreDepartamento FROM tbl_departamento WHERE codigoDepartamento=".$codigoDepartamento);
  oci_execute($queryDepartamento);

  while ($row = oci_fetch_array($queryDepartamento, OCI_ASSOC+OCI_RETURN_NULLS)) {
      foreach ($row as $item) {
          $nombreDepartamento = $item;
      }
      echo $nombreDepartamento;
    }

}

?> 