<?php
	require '../../../config/conexion.php';
	$idGerenciaUpdate =$_POST['idEditGerencia'];
	$nomGerenciaUpdate = $_POST['nomEditGerencia'];
	$desGerenciaUpdate = $_POST['detalleEditGerencia'];

	$upd = $con->query("UPDATE gerencia SET nom_gerencia='$nomGerenciaUpdate',
																					desc_gerencia='$desGerenciaUpdate'
										WHERE id_gerencia= '$idGerenciaUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
