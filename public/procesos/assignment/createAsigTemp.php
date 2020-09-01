<?php
	session_start();
	require '../../../config/conexion.php';

	$fechaAsigNew = $_POST['newAsigFecha'];
	$resopAsigNew = $_POST['newAsigEmp'];//RESPONSABLE
	$serieAsigNew = $_POST['newAsigSerie'];//ID_EQUIPO
	$cantiAsigNew = $_POST['newAsigCant'];//CANTIDAD
	$gerenAsigNew = $_POST['newAsigGerencia'];
	$areasAsigNew = $_POST['newAsigArea'];//AREA UBICACION
	$elsuAsigNew = $_POST['newAsigElsu'];
	$ipAsigNew = $_POST['newAsigIP'];
	$macAsigNew = $_POST['newAsigMAC'];

  // Obtenemos el nombre del Responsable --------------
	$sql=$con->query("SELECT nom_emp,ape_emp FROM empleado WHERE id_emp= '$resopAsigNew' ");
	$r = $sql->fetch_row();
	$nResp = $r[1]." ".$r[0];

  // Obtenemos los datos del Equipo ---------------
	$sql=$con->query("SELECT serie_equipo,
                            marca_equipo,
                            af_equipo,
														descripcion_equipo,
                            cantidad_equipo,
                            id_categoria,
                            id_presentacion
                    FROM equipo
                    WHERE id_equipo = '$serieAsigNew' ");

	$p = $sql->fetch_row();

	$serieEquipo = $p[0];
	$marcaEquipo = $p[1];
	$activEquipo = $p[2];
  $descrEquipo = $p[3];
	$cantiEquipo = $p[4];
	$ctgorEquipo = $p[5];
  $prestEquipo = $p[6];

  // Guardar datos en la variable articulo
	$articulo = $fechaAsigNew."||".
							$resopAsigNew."||".
      				$nResp."||".
      				$serieAsigNew."||".
      				$serieEquipo."||".
      				$marcaEquipo."||".
      				$activEquipo."||".
              $descrEquipo."||".
              $cantiEquipo."||".
              $ctgorEquipo."||".
							$prestEquipo."||".
      				$gerenAsigNew."||".
							$areasAsigNew."||".
							$elsuAsigNew."||".
							$ipAsigNew."||".
							$macAsigNew;

  // Condicinal para validar
  if ($cantiAsigNew == 0) {
    echo 2;
  }else {
    if ($cantiAsigNew <= $cantiEquipo) {
      $_SESSION['EquipoAssigTemp'][]=$articulo;
    }else {
      echo 1;
    }
  }

 ?>
