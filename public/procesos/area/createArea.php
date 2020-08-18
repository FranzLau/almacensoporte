<?php
	require '../../../config/conexion.php';
	$nomArea = $_POST['nomNewArea'];
	$descArea = $_POST['detalleNewArea'];

	$query = $con->query("SELECT nom_area FROM area WHERE nom_area LIKE '". $nomArea ."' ");
	$categ = $query->fetch_row();
	if ($categ[0]==$nomArea) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO area (nom_area,desc_area) VALUES ('$nomArea','$descArea')");
		if ($res) {
			echo 1;
			//json_encode(array('error' => false));
		}else{
			echo 2; 
			//json_encode(array('error' => true));
		}
	}

$con->close();
?>
