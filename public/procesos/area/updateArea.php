<?php
	require '../../../config/conexion.php';
	$idAreaUpdate =$_POST['idEditArea'];
	$nomAreaUpdate = $_POST['nomEditArea'];
	$desAreaUpdate = $_POST['detalleEditArea'];

	$upd = $con->query("UPDATE area SET nom_area='$nomAreaUpdate',
																					desc_area='$desAreaUpdate'
										WHERE id_area= '$idAreaUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
