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

    <!-- modal para Areas -->

    <?php include('../modal/modalAreaCreate.php'); ?>
    <?php include('../modal/modalAreaEdit.php'); ?>

    <!-- modal para Gerencias -->

    <?php include('../modal/modalGerenciaCreate.php'); ?>
    <?php include('../modal/modalGerenciaEdit.php'); ?>

    <!-- modal para Gerencias -->

    <?php include('../modal/modalSedeCreate.php'); ?>
    <?php include('../modal/modalSedeEdit.php'); ?>


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
              <div class="col-6 text-left">
                <h1 class="h3 mb-0 text-gray-800">Empresa</h1>
              </div>
              <div class="col-6">
                <ul class="nav nav-pills nav-pills-primary justify-content-end" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fab fa-trello mr-2 fa-sm"></i>Área</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-couch mr-2 fa-sm"></i>Gerencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-sede-tab" data-toggle="pill" href="#pills-sede" role="tab" aria-controls="pills-sede" aria-selected="false"><i class="fas fa-map-marker-alt mr-2 fa-sm"></i>Sede</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Content Row -->
            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="tab-content" id="pills-tabContent">

                  <!--<<<<<<- Panel de AREAS -<<<<<<<<<<<<-->

                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card shadow">
                      <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-clipboard-list mr-2"></i>Lista de Áreas</h6>
                        <div class="no-arrow">
                          <!-- <a href="#"><i class="fas fa-plus fa-fw text-gray-600"></i></a> -->
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAreaCreate"><i class="fas fa-plus fa-fw"></i></button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="tableArea"></div>
                      </div>
                    </div>
                  </div>

                  <!--<<<<<<- Panel de GERENCIAS -<<<<<<<<<<<<-->

                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card shadow">
                      <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Lista de Gerencias</h6>
                        <div class="no-arrow">
                          <!-- <a href="#"><i class="fas fa-plus fa-fw text-gray-600"></i></a> -->
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalGerenciaCreate"><i class="fas fa-plus fa-fw"></i></button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="tableGerence"></div>
                      </div>
                    </div>
                  </div>

                  <!--<<<<<<- Panel de SEDES -<<<<<<<<<<<<-->

                  <div class="tab-pane fade" id="pills-sede" role="tabpanel" aria-labelledby="pills-sede-tab">
                    <div class="card shadow">
                      <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Lista de Sedes</h6>
                        <div class="no-arrow">
                          <!-- <a href="#"><i class="fas fa-plus fa-fw text-gray-600"></i></a> -->
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalSedeCreate"><i class="fas fa-plus fa-fw"></i></button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div id="tableSede"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableArea').load('../componentes/tableArea.php');
        $('#tableGerence').load('../componentes/tableGerence.php');
        $('#tableSede').load('../componentes/tableSede.php');
      });
    </script>
    <script type="text/javascript">
    function ReadAreas(idarea){
      $.ajax({
        url: '../../public/procesos/area/readArea.php',
        type: 'POST',
        data: "idarea=" + idarea,
        success:function(r){
          var datos= $.parseJSON(r);
          $('#idEditArea').val(datos['idArea']);
          $('#nomEditArea').val(datos['nomArea']);
          $('#detalleEditArea').val(datos['descArea']);
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

    function deleteArea(idarea){
      alertify.confirm("¿Seguro de Eliminar el Area?.",
      function(){
         $.ajax({
          url: '../../public/procesos/area/deleteArea.php',
          type: 'POST',
          data: "idarea=" + idarea,
          success:function(r){
           if (r==1) {
            $('#tableArea').load('../componentes/tableArea.php');
            alertify.success("Eliminaste con Exito");
           }else{
            alertify.error("No se pudo eliminar el Área");
           }
          }
        })
      },
      function(){
        alertify.warning('Estuviste a punto de Eliminar');
      });
    }

    //------- Funciones para Gerencias --------------------------
    function ReadGerence(idgeren){
      $.ajax({
        url: '../../public/procesos/gerencia/readGerencia.php',
        type: 'POST',
        data: "idgeren=" + idgeren,
        success:function(r){
          var datos= $.parseJSON(r);
          $('#idEditGerencia').val(datos['idGerenc']);
          $('#nomEditGerencia').val(datos['nomGerenc']);
          $('#detalleEditGerencia').val(datos['descGerenc']);
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

    function deleteGerence(idgerenc){
      alertify.confirm("¿Seguro de Eliminar la Gerencia?.",
      function(){
         $.ajax({
          url: '../../public/procesos/gerencia/deleteGerencia.php',
          type: 'POST',
          data: "idgerenc=" + idgerenc,
          success:function(r){
           if (r==1) {
            $('#tableGerence').load('../componentes/tableGerence.php');
            alertify.success("Eliminaste con Exito");
           }else{
            alertify.error("No se pudo eliminar");
           }
          }
        })
      },
      function(){
        alertify.warning('Estuviste a punto de Eliminar');
      });
    }

    //------- Funciones para Sedes -------------------------
    function ReadSedes(idsede){
      $.ajax({
        url: '../../public/procesos/sede/readSede.php',
        type: 'POST',
        data: "idsede=" + idsede,
        success:function(r){
          var datos= $.parseJSON(r);
          $('#idEditSede').val(datos['idSedes']);
          $('#nomEditSede').val(datos['nomSedes']);
          $('#detalleEditSede').val(datos['descSedes']);
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

    function deleteSedes(idsede){
      alertify.confirm("¿Seguro de Eliminar la Sede?.",
      function(){
         $.ajax({
          url: '../../public/procesos/sede/deleteSede.php',
          type: 'POST',
          data: "idsede=" + idsede,
          success:function(r){
           if (r==1) {
            $('#tableSede').load('../componentes/tableSede.php');
            alertify.success("Eliminaste con Exito");
           }else{
            alertify.error("No se pudo eliminar");
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
