<?php
	require '../../../config/conexion.php';

	$idProdEdit =$_POST['idEditProd'];
	$serieProdEdit = $_POST['serieEditProd'];
	$marcaProdEdit = $_POST['marcaEditProd'];
	$modelProdEdit = $_POST['modeloEditProd'];
	$af1ProdEdit = $_POST['af1EditProd'];
	$af2ProdEdit = $_POST['af2EditProd'];
	$descProdEdit = $_POST['descEditProd'];
	$estaProdEdit = $_POST['estadoEditProd'];
	$cantProdEdit = $_POST['cantEditProd'];
	$idctgProdEdit = $_POST['ctgsEditeProd'];
	$idpstProdEdit = $_POST['preseEditeProd'];

	$upd = $con->query("UPDATE equipo SET serie_equipo='$serieProdEdit',
																				marca_equipo='$marcaProdEdit',
																				modelo_equipo='$modelProdEdit',
																				af_equipo='$af1ProdEdit',
																				af2_equipo='$af2ProdEdit',
																				descripcion_equipo='$descProdEdit',
																				estado_equipo='$estaProdEdit',
																				cantidad_equipo='$cantProdEdit',
																				id_categoria='$idctgProdEdit',
																				id_presentacion='$idpstProdEdit'
																	WHERE id_equipo= '$idProdEdit' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
?>
