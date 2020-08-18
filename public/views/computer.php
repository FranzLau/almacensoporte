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
  <body>
    <?php include('../modal/modalAperturaBox.php'); ?>
    <?php include('../modal/modalAperturaBoxEdit.php'); ?>
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
              <div class="col-6 text-left">
                <h1 class="h3 mb-0 text-gray-800">Dominios</h1>
              </div>
              <div class="col-6">
                <ul class="nav nav-pills nav-pills-primary justify-content-end" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-list mr-2 fa-sm"></i>Listado</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-plus mr-2 fa-sm"></i>Nuevo</a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Content Row -->

            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card shadow mb-4">
                      <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Lista de Equipos</h6>
                      </div>
                      <div class="card-body">
                        <div id="tableDomin"></div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card shadow">
                      <div class="card-header d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Registro de Equipos</h6>
                        <!-- <div class="no-arrow">
                          <a href="configuration.php"><i class="fas fa-cog fa-fw text-gray-600"></i></a>
                        </div> -->
                      </div>
                      <div class="card-body">

                        <!-- Content Row -->

                        <form id="">


                          <!-- Content Form -->
                          <div class="form-row">
                            <div class="form-group col-md-3">
                              <label for="responEquipo" class="col-form-label col-form-label-sm">Equipo:</label>
                              <select class="form-control form-control-sm" id="responEquipo" name="responEquipo" style="width:100%">
                                <option value="">Elije serie</option>
                                <?php $ctg = $con->query("SELECT * FROM equipo");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_equipo']."' ";
                                      echo ">";
                                      echo $row['serie_equipo'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                            <div class="form-group col-md-3">
                              <label for="nombNewProd" class="col-form-label col-form-label-sm">Nombre:</label>
                              <input type="text" class="form-control form-control-sm" id="nombNewProd" name="nombNewProd">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="ipNewProd" class="col-form-label col-form-label-sm">IP:</label>
                              <input type="text" class="form-control form-control-sm" id="ipNewProd" name="ipNewProd" placeholder="191.168.00.00">
                            </div>
                            <div class="form-group col-md-3">
                              <label for="macNewProd" class="col-form-label col-form-label-sm">MAC:</label>
                              <input type="text" class="form-control form-control-sm" id="macNewProd" name="macNewProd" placeholder="00:00:00:00:00">
                            </div>

                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="responNewProd" class="col-form-label col-form-label-sm">Responsable:</label>
                              <select class="form-control form-control-sm" id="responNewProd" name="responNewProd" style="width:100%">
                                <option value="">Elije uno</option>
                                <?php $ctg = $con->query("SELECT * FROM empleado");
                                    while ($row = $ctg->fetch_assoc()) {
                                      echo "<option value='".$row['id_emp']."' ";
                                      echo ">";
                                      echo $row['nom_emp'];
                                      echo " ";
                                      echo $row['ape_emp'];
                                      echo "</option>";
                                    }
                                ?>
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="sedeNewProd" class="col-form-label col-form-label-sm">Gerencia</label>
                              <select class="form-control form-control-sm" id="sedeNewProd" name="sedeNewProd" style="width:100%">
                                <option selected>Elije uno</option>
                                <option value="GP">Gerencia Planeamiento y Desarrollo</option>
                                <option value="GG">Gerencia General</option>
                                <option value="AL">Asesoría Legal</option>
                                <option value="GO">Gerencia de Operaciones</option>
                                <option value="CI">Control Institucional</option>
                                <option value="GT">Gerencia Técnica</option>
                                <option value="GA">Gerencia Administración y Finanzas</option>
                                <option value="GC">Gerencia Comercial</option>
                                <option value="Moq">Gerencia Moquegua</option>
                                <option value="Ilo">Gerencia Ilo</option>
                              </select>
                            </div>
                          </div>

                        </form>

                        <hr>

                        <div class="row">
                          <div class="col-md-12 text-right">
                            <button type="button" class="btn btn-success btn-sm" id="btnCreateCompu"><i class="fas fa-save mr-2 fa-sm text-white-50"></i>Guardar</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableDomin').load('../componentes/tableComputer.php');
      });
    </script>
    <script type="text/javascript">
      function obtenDataOpenbox(idbox){
        $.ajax({
          url: '../../public/procesos/box/readOpenbox.php',
          type: 'POST',
          data: "idbox=" + idbox,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idOpenbox').val(datos['idOpenbox']);
            //$('#empCloseBox').val(datos['empleOpenbox']);
            $('#montoAperturaBox').val(datos['montoOpenbox']);
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
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
