<?php
	session_start();
	require '../../../config/conexion.php';

	$empleAsigfrm=$_POST['newAsigEmp'];//RESPONSABLE
	$serieAsigfrm=$_POST['newAsigSerie'];//EQUIPO
	$ubicAsigfrm=$_POST['newAsigArea'];//AREA UBICACION
	$cantAsigfrm=$_POST['newAsigCant'];//CANTIDAD
	//$fechAsigfrm=$_POST['newAsigFecha'];//FECHA

  // Obtenemos el nombre del Responsable --------------
	$sql=$con->query("SELECT nom_emp,ape_emp FROM empleado WHERE id_emp= '$empleAsigfrm' ");
	$r = $sql->fetch_row();
	$nResp = $r[1]." ".$r[0];

  // Obtenemos los datos del Equipo ---------------
	$sql=$con->query("SELECT serie_equipo,
                            marca_equipo,
                            modelo_equipo,
                            af_equipo,
                            cantidad_equipo,
                            id_categoria,
                            id_presentacion
                    FROM equipo
                    WHERE id_equipo = '$serieAsigfrm' ");

	$p = $sql->fetch_row();

	$serieEquipo = $p[0];
	$marcaEquipo = $p[1];
	$modelEquipo = $p[2];
  $activEquipo = $p[3];
	$cantiEquipo = $p[4];
	$ctgorEquipo = $p[5];
  $prestEquipo = $p[6];

  // Guardar datos en la variable articulo
	$articulo = $empleAsigfrm."||".
      				$nResp."||".
      				$serieAsigfrm."||".
      				$serieEquipo."||".
      				$marcaEquipo."||".
      				$modelEquipo."||".
              $activEquipo."||".
              $cantiEquipo."||".
              $ctgorEquipo."||".
							$ubicAsigfrm."||".
      				$prestEquipo;

  // Condicinal para validar
  if ($cantAsigfrm == 0) {
    echo 2;
  }else {
    if ($cantAsigfrm <= $cantiEquipo) {
      $_SESSION['EquipoAssigTemp'][]=$articulo;
    }else {
      echo 1;
    }
  }

 ?>
