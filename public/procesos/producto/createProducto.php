<?php
	require '../../../config/conexion.php';

	$serieNewProd = $_POST['serieNewProd'];
	$marcaNewProd = $_POST['marcaNewProd'];
	$modelNewProd = $_POST['modeloNewProd'];
	$af1NewProd = $_POST['af1NewProd'];
	$af2NewProd = $_POST['af2NewProd'];
	$descNewProd = $_POST['descNewProd'];
	$estNewProd = $_POST['estadoNewProd'];
	$cantNewProd = $_POST['cantNewProd'];

	$ramNewProd = $_POST['ram_NewProd'];
	$diskNewProd = $_POST['disk_NewProd'];

	$ctgNewProd = $_POST['catgNewProd'];
	$pstNewProd = $_POST['presentNewProd'];

	$vale = $con->query("SELECT serie_equipo FROM equipo WHERE serie_equipo LIKE '". $serieNewProd ."' ");
	$produ = $vale->fetch_row();
	if ($produ[0]==$serieNewProd) {
		echo 0;
	}else{
		$res = $con->query("INSERT INTO equipo (serie_equipo,
																						marca_equipo,
																						modelo_equipo,
																						af_equipo,
																						af2_equipo,
																						descripcion_equipo,
																						estado_equipo,
																						cantidad_equipo,
																						ram_equipo,
																						disco_equipo,
																						id_categoria,
																						id_presentacion)
														VALUES ('$serieNewProd',
																		'$marcaNewProd',
																		'$modelNewProd',
																		'$af1NewProd',
																		'$af2NewProd',
																		'$descNewProd',
																		'$estNewProd',
																		'$cantNewProd',
																		'$ramNewProd',
																		'$diskNewProd',
																		'$ctgNewProd',
																		'$pstNewProd')");
		if ($res) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}
	}

$con->close();
?>
