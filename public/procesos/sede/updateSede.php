<?php
	require '../../../config/conexion.php';
	$idSedeUpdate =$_POST['idEditSede'];
	$nomSedeUpdate = $_POST['nomEditSede'];
	$descSedeUpdate = $_POST['detalleEditSede'];

	$upd = $con->query("UPDATE sede SET nom_sede='$nomSedeUpdate',
																					desc_sede='$descSedeUpdate'
										WHERE id_sede= '$idSedeUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
