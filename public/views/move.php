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

            <!-- Content Row -->

            <div class="row">
              <div class="col-sm-12">
                <div class="card shadow">

                  <!-- HEADER CARD ------------------------ -->

                  <div class="card-header d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-desktop mr-2"></i>Fichas de Movimiento</h6>
                    <div class="no-arrow">
                      <ul class="nav nav-pills nav-pills-primary justify-content-end" id="pills-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-list mr-2 fa-sm"></i>Listado</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="far fa-file mr-2 fa-sm"></i>Registro</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <!-- BODY CARD ------------------------------------ -->

                  <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">

                      <!-- primer PANEL -->

                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div id="tableMoves"></div>
                      </div>

                      <!-- segundo PANEL -->

                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <!-- 1ra fila FORMULARIO  -->
                        <div class="row">
                          <div class="col-sm-12">
                              <form id="formNewMove">
                                <div class="form-row">

                                  <div class="form-group col-sm-2">
                                    <label class="col-form-label col-form-label-sm" for="dateNewMove">Fecha :</label>
                                    <input type="date" class="form-control form-control-sm" id="dateNewMove" name="dateNewMove">
                                  </div>

                                  <div class="form-group col-md-5">
                                    <label for="origNewMove" class="col-form-label col-form-label-sm">Origen :</label>
                                    <select class="form-control form-control-sm" id="origNewMove" name="origNewMove" style="width:100%">
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

                                  <div class="form-group col-md-5">
                                    <label for="destiNewMove" class="col-form-label col-form-label-sm">Destino:</label>
                                    <select class="form-control form-control-sm" id="destiNewMove" name="destiNewMove" style="width:100%">
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

                                </div>

                                <!-- segundo FORM - ROW -->

                                <div class="form-row">

                                  <div class="form-group col-md-3">
                                    <label for="equiNewMove" class="col-form-label col-form-label-sm">Equipo:</label>
                                    <select class="form-control form-control-sm" id="equiNewMove" name="equiNewMove" style="width:100%">
                                      <option value="">Elije serie</option>
                                      <?php $ctg = $con->query("SELECT * FROM asignacion INNER JOIN equipo ON asignacion.id_equipo = equipo.id_equipo");
                                          while ($row = $ctg->fetch_assoc()) {
                                            echo "<option value='".$row['id_equipo']."' ";
                                            echo ">";
                                            echo $row['serie_equipo'];
                                            echo "</option>";
                                          }
                                      ?>
                                    </select>
                                  </div>

                                  <div class="form-group col-md-2">
                                    <label for="catgNewMove" class="col-form-label col-form-label-sm">Categoria :</label>
                                    <!-- <input type="text" class="form-control form-control-sm" id="newAsigCateg" name="newAsigCateg" readonly> -->
                                    <select class="form-control form-control-sm" id="catgNewMove" name="catgNewMove" style="width:100%" disabled>
                                      <option value="">Pertenece a...</option>
                                      <?php $ctg = $con->query("SELECT * FROM categoria");
                                          while ($row = $ctg->fetch_assoc()) {
                                            echo "<option value='".$row['id_categoria']."' ";
                                            echo ">";
                                            echo $row['nom_categoria'];
                                            echo "</option>";
                                          }
                                      ?>
                                    </select>
                                  </div>

                                  <div class="form-group col-sm-2">
                                    <label class="col-form-label col-form-label-sm" for="marcNewMove">Marca :</label>
                                    <input type="text" readonly class="form-control form-control-sm" id="marcNewMove" name="marcNewMove">
                                  </div>

                                  <div class="form-group col-md-5">
                                    <label for="obsNewMove" class="col-form-label col-form-label-sm">Observacion:</label>
                                    <input type="text" class="form-control form-control-sm" id="obsNewMove" name="obsNewMove">
                                  </div>

                                </div>

                              </form>
                          </div>
                        </div>

                        <!-- 2da fila : botones  -->
                        <div class="row">
                          <div class="col-sm-12">
                            <button type="button" class="btn btn-sm btn-danger" id="btncleanMov">
                              <i class="fas fa-broom fa-sm"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-info" id="btnaddMov">
                              <i class="fas fa-plus mr-2 fa-sm"></i>AGREGAR
                            </button>
                          </div>
                        </div>
                        <!-- FIN 2da fila de botones  -->

                        <!-- 3RA FILA TABLA TEMPORAL  -->
                        <div class="row mt-3">
                          <div class="col-sm-12">
                            <div id="tableMoveTemp"></div>
                          </div>
                        </div>
                        <!-- FIN 3Ra fila TABLA TEMPORAL  -->

                      </div>
                      <!-- FIN 2do panel -->

                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Content Row -->


          </div>
        </div><!--<<<<<<<<<<<<<<<<< FIN DE CONTENIDO <<<<<<<<<<<<<<<<<-->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2019</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->

      </div>  <!--<<<<<<<<<<<<<< FIN DE CONTENT WRAPPER <<<<<<<<<<<<<<<-->

    </div><!--<<<<<<<<<<<<<<<<<<< FIN DE WRAPPER   <<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableMoves').load('../componentes/tableMoves.php');
        $('#tableMoveTemp').load("../componentes/tableMovesTemp.php");
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {

        // para datos del Equipos
        $('#equiNewMove').change(function() {
            $.ajax({
              url: '../../public/procesos/producto/readProducto.php',
              type: 'POST',
              data: "idprod=" + $('#equiNewMove').val(),
              success:function(r){
                var datos = $.parseJSON(r);

                $('#marcNewMove').val(datos['ProdMarca']);
                $('#catgNewMove').val(datos['ProdCtg']);
              }
            })
          });

          // agregar equipo Movimiento Temp
          $('#btnaddMov').click(function() {
            vacios = validarFrmVacio('formNewMove');
            if(vacios > 0){
            	alertify.error("Debe llenar todos los campos!");
            	return false;
            }
            datos = $('#formNewMove').serialize();
            $.ajax({
              url: '../procesos/move/createMoveTemp.php',
              type: 'POST',
              data: datos,
              success:function(r){
                if (r==2) {
                  alertify.error('Ingrese un valor mayor');
                }else if(r==1){
                  alertify.error('Ingrese un valor menor');
                }else{
                  $('#TableAsigTempLoad').load("../componentes/tableAssignmentTemp.php");
                }
              }
            })
          });

      });
    </script>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
