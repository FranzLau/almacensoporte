<?php
	session_start();
	require '../../../config/conexion.php';
	$describeCargo = $_POST['nomNewCargo'];
	$detalleCargo = $_POST['detalleNewCargo'];

	$gasto = $con->query("INSERT INTO cargo (nom_cargo,desc_cargo) VALUES ('$describeCargo','$detalleCargo')");

	if ($gasto) {
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error' => true));
	}

	$con->close();
 ?>
