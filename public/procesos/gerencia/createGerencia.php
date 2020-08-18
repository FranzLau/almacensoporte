<?php
	require '../../../config/conexion.php';
	$nomGerencia = $_POST['nomNewGerencia'];
	$desGerencia = $_POST['detalleNewGerencia'];

	$query = $con->query("SELECT nom_gerencia FROM gerencia WHERE nom_gerencia LIKE '". $nomGerencia ."' ");
	$gerenc = $query->fetch_row();
	if ($gerenc[0]==$nomGerencia) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO gerencia (nom_gerencia,desc_gerencia) VALUES ('$nomGerencia','$desGerencia')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
