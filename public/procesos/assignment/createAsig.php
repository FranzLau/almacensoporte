<?php
	session_start();
	require '../../../config/conexion.php';
	require '../../../config/crud.php';
	$obj=new crud();

	if (count($_SESSION['EquipoAssigTemp'])==0) {
		echo 0;
	}else{
		$result = $obj->createAssignment();
		unset($_SESSION['EquipoAssigTemp']);
		echo $result;
	}

 ?>
