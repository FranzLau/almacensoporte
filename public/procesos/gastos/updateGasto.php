<?php
	require '../../../config/conexion.php';
	$formIdCargo = $_POST['idEditCargo'];
	$formNomCargo = $_POST['nomEditCargo'];
	$formDesCargo = $_POST['detEditCargo'];

	$upd = $con->query("UPDATE cargo SET nom_cargo='$formNomCargo',
																			desc_cargo='$formDesCargo'
										WHERE id_cargo= '$formIdCargo' ");
	if ($upd) {
		echo json_encode(array('error' => false));
	}else{
		echo json_encode(array('error' => true));
	}
	$con->close();
 ?>
