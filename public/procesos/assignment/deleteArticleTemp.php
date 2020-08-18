<?php
	session_start();
	$index = $_POST['ind'];
	unset($_SESSION['EquipoAssigTemp'][$index]);
	$datos = array_values($_SESSION['EquipoAssigTemp']);
	unset($_SESSION['EquipoAssigTemp']);
	$_SESSION['EquipoAssigTemp'] = $datos;
 ?>
