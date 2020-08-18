<?php
	require '../../../config/conexion.php';
	$nomPresent = $_POST['nomPrest'];
	$desPresent = $_POST['descPrest'];

	$query = $con->query("SELECT nom_presentacion FROM presentacion WHERE nom_presentacion LIKE '". $nomPresent ."' ");
	$categ = $query->fetch_row();
	if ($categ[0]==$nomPresent) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO presentacion (nom_presentacion,desc_presentacion) VALUES ('$nomPresent','$desPresent')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
