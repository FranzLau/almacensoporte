<?php
session_start();

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

	require 'config/conexion.php';
	$con->set_charset('utf8');

	$usuariolg = $con->real_escape_string($_POST['userphp']);
	$passwordlg = $con->real_escape_string($_POST['passphp']);

	if ($newsql = $con->prepare("SELECT id_user,nom_user,pass_user,estado_user,tipo_user,id_emp FROM usuario WHERE nom_user = ? AND pass_user=?")) {

		$newsql->bind_param('ss',$usuariolg,$passwordlg);
		$newsql->execute();

		$resultado = $newsql->get_result();
		if ($resultado->num_rows == 1) {
			$datos = $resultado->fetch_assoc();
			$_SESSION['loginUser'] = $datos;

			echo json_encode(array('error' => false,'tipo' => $datos['nom_user']));
		}else{
			echo json_encode(array('error' => true));
		}
		$newsql->close();
	}
}

$con->close();
?>
