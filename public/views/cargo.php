<?php
  session_start();
  require '../../config/conexion.php';
  if (isset($_SESSION['loginUser'])) {
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include('head.php'); ?>
  </head>
  <body id="page-top">

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <?php include('../modal/modalEgresoCreate.php'); ?>
    <?php include('../modal/modalEgresoEdit.php'); ?>

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <!-- Page Wrapper -->
    <div id="wrapper">
      <?php include("sidebar.php"); ?>

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
          <?php include("topbar.php"); ?>

          <!-- Begin Page Content -->
          <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
              <div class="col-6 text-left d-flex">
                <!-- <h4 class="page-title my-auto">EGRESOS</h4> -->
                <h1 class="h3 mb-0 text-gray-800">Configuración Empleado</h1>
              </div>
              <div class="col-6 mt-md-0 text-right">
                <a href="empleado.php" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Atras</span></a>
                <!-- <button type="button" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalRetiroCreate"><i class="fas fa-plus mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Nuevo Cargo</span></button> -->
              </div>
            </div>

            <!-- Content Row -->
            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-graduation-cap mr-2"></i>Lista de Cargos</h6>
                    <div class="no-arrow">
                      <!-- <a href="#"><i class="fas fa-plus-circle fa-fw text-gray-400"></i></a> -->
                      <button type="button" class="btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modalRetiroCreate"><i class="fas fa-plus fa-sm"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="tableRetiro"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->


    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableRetiro').load('../componentes/tablegasto.php');
      });
    </script>
    <script type="text/javascript">
      function obtenDataEgreso(idgto){
        $.ajax({
          url: '../../public/procesos/gastos/readGasto.php',
          type: 'POST',
          data: "idgto=" + idgto,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idEditCargo').val(datos['idCargo']);
            $('#nomEditCargo').val(datos['nomCargo']);
            $('#detEditCargo').val(datos['desCargo']);
          }
        })
        .done(function() {
          console.log("success");
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      }
      function deleteEgreso(idgto){
    	  alertify.confirm("¿Seguro de BORRAR?.",
          function(){
             $.ajax({
              url: '../../public/procesos/gastos/deleteGasto.php',
              type: 'POST',
              data: "idgto=" + idgto,
              success:function(r){
               if (r==1) {
                $('#tableRetiro').load('../componentes/tablegasto.php');
                alertify.success("Eliminaste con EXITO");
               }else{
                alertify.error("No se pudo Eliminar");
               }
              }
            })
          },
          function(){
            alertify.warning('Estuviste a punto de Eliminar');
          });
    	}
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
