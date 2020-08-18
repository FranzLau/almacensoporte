<?php
	require '../../../config/conexion.php';
	require '../../../config/crud.php';

	$obj = new crud();
	echo $obj->DeleteCargos($_POST['idgto']);

 ?>
