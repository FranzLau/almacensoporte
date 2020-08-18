<?php
	session_start();
	require '../../../config/conexion.php';

	$dateMovefrm=$_POST['newAsigEmp'];//FECHA
	$origMovefrm=$_POST['newAsigSerie'];//ORIGEN
	$destMovefrm=$_POST['newAsigArea'];//DESTINO
	$prodMovefrm=$_POST['newAsigCant'];//EQUIPO ID
	$obseMovefrm=$_POST['newAsigFecha'];//OBSERVACION

  // Obtenemos el nombre del Origen --------------
	$sql=$con->query("SELECT nom_emp,ape_emp FROM empleado WHERE id_emp= '$origMovefrm' ");
	$o = $sql->fetch_row();
	$nOri = $o[1]." ".$o[0];

  // Obtenemos el nombre del Destino --------------
	$sql=$con->query("SELECT nom_emp,ape_emp FROM empleado WHERE id_emp= '$destMovefrm' ");
	$d = $sql->fetch_row();
	$nDes = $d[1]." ".$d[0];

  // Obtenemos los datos del Equipo ---------------
	$sql=$con->query("SELECT serie_equipo,
                            marca_equipo,
                            modelo_equipo,
                            af_equipo,
                            cantidad_equipo,
                            id_categoria,
                            id_presentacion
                    FROM equipo
                    WHERE id_equipo = '$prodMovefrm' ");

	$p = $sql->fetch_row();

	$serieEquipo = $p[0];
	$marcaEquipo = $p[1];
	$modelEquipo = $p[2];
  $activEquipo = $p[3];
	$cantiEquipo = $p[4];
	$ctgorEquipo = $p[5];
  $prestEquipo = $p[6];

  // Guardar datos en la variable articulo
	$articulo = $dateMovefrm."||".
      				$origMovefrm."||".
              $nOri."||".
              $destMovefrm."||".
              $nDes."||".
      				$prodMovefrm."||".
      				$serieEquipo."||".
      				$marcaEquipo."||".
      				$modelEquipo."||".
              $activEquipo."||".
              $cantiEquipo."||".
              $ctgorEquipo."||".
							$ubicAsigfrm."||".
              $prestEquipo."||".
      				$obseMovefrm;

  // Condicinal para validar
  if ($cantAsigfrm == 0) {
    echo 2;
  }else {
    if ($cantAsigfrm <= $cantiEquipo) {
      $_SESSION['EquipoMoveTemp'][]=$articulo;
    }else {
      echo 1;
    }
  }

 ?>
