<?php
	require '../../../config/conexion.php';
	$idPretUpdate =$_POST['idPresentEdit'];
	$nomPretUpdate = $_POST['nomPresentEdit'];
	$desPretUpdate = $_POST['desPresentEdit'];

	$upd = $con->query("UPDATE presentacion SET nom_presentacion='$nomPretUpdate',
												desc_presentacion='$desPretUpdate'
										WHERE id_presentacion= '$idPretUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
