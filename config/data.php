<?php
/**
 *
 */
class data
{

  // ---------**************-- SOPORTE CONTROL -----***************------------------
  public function nombEmpleado($idemp){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_emp,ape_emp FROM empleado WHERE id_emp = '$idemp' ");
		$result = $sql->fetch_row();
		return $result[0]." ".$result[1];
	}
  public function nameCategory($idcateg){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_categoria FROM categoria WHERE id_categoria = '$idcateg' ");
		$result = $sql->fetch_row();
		return $result[0];
	}
	public function namePresentation($idprest){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_presentacion FROM presentacion WHERE id_presentacion = '$idprest' ");
		$result = $sql->fetch_row();
		return $result[0];
	}
  public function nameCargo($idcarg){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_cargo FROM cargo WHERE id_cargo = '$idcarg' ");
		$result = $sql->fetch_row();
		return $result[0];
	}
  public function nameArea($idarea){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_area FROM area WHERE id_area = '$idarea' ");
		$result = $sql->fetch_row();
		return $result[0];
	}
  public function nameGerence($idgeren){
		require 'conexion.php';
		$sql = $con->query("SELECT nom_gerencia FROM gerencia WHERE id_gerencia = '$idgeren' ");
		$result = $sql->fetch_row();
		return $result[0];
	}

  public function serieEquipo($idequipo){
		require 'conexion.php';
		$sql = $con->query("SELECT serie_equipo FROM equipo WHERE id_equipo = '$idequipo' ");
		$result = $sql->fetch_row();
		return $result[0];
	}


}

 ?>
