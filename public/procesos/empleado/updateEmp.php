<?php
	require '../../../config/conexion.php';
	$idEmpUpdate = $_POST['editIdEmp'];
	$nomEmpUpdate = $_POST['editNombEmp'];
	$apeEmpUpdate = $_POST['editApeEmp'];
	$estaEmpUpdate = $_POST['editEstaEmp'];
	$cargoEmpUpdate = $_POST['EditCargoEmp'];

	$arEmpUpdate = $_POST['EditAreaEmp'];
	$grEmpUpdate = $_POST['EditGerenciasEmp'];
	$sdEmpUpdate = $_POST['EditSedesEmp'];

	$upd = $con->query("UPDATE empleado SET nom_emp='$nomEmpUpdate',
                    											ape_emp='$apeEmpUpdate',
																					estado_emp='$estaEmpUpdate',
                    											id_cargo='$cargoEmpUpdate',
																					id_area='$arEmpUpdate',
																					id_gerencia='$grEmpUpdate',
																					id_sede='$sdEmpUpdate'
										                 WHERE id_emp= '$idEmpUpdate' ");
	if ($upd) {
			echo json_encode(array('error' => false));
		}else{
			echo json_encode(array('error' => true));
		}

$con->close();
 ?>
