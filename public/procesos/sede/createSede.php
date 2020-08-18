<?php
	require '../../../config/conexion.php';
	$nomSedeNew = $_POST['nomNewSede'];
	$desSedeNew = $_POST['detalleNewSede'];

	$query = $con->query("SELECT nom_sede FROM sede WHERE nom_sede LIKE '". $nomSedeNew ."' ");
	$sede = $query->fetch_row();
	if ($sede[0]==$nomSedeNew) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO sede (nom_sede,desc_sede) VALUES ('$nomSedeNew','$desSedeNew')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
