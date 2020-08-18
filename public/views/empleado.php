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

    <?php include('../modal/modalEmpEdit.php'); ?>

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
                <!-- <h4 class="page-title my-auto">Empleados</h4> -->
                <h1 class="h3 mb-0 text-gray-800">Empleados</h1>
              </div>
              <div class="col-6 mt-md-0">
                <!-- <button type="button" class="btn btn-primary shadow-sm btn-sm" data-toggle="modal" data-target="#ModalNuevoEmp"><i class="fas fa-plus mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Nuevo Empleado</span></button> -->
                <!--
                <a href="cargo.php" class="btn btn-primary shadow-sm btn-sm"><i class="fas fa-graduation-cap mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Sección Cargos</span></a> -->
                <ul class="nav nav-pills nav-pills-primary justify-content-end" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-list mr-2 fa-sm"></i>Lista</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-plus mr-2 fa-sm"></i>Agregar</a>
                  </li>
                </ul>
              </div>
            </div>


            <!-- Page Heading -->

            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div id="tableEmp"></div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <div class="card shadow">
                      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user mr-2"></i>Registrar Empleados</h6>
                        <div class="no-arrow">
                          <a href="cargo.php"><i class="fas fa-cog fa-fw text-gray-400"></i></a>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <form id="formCreateEmp">
                              <div class="form-row">
                                <div class="form-group col-sm-3">
                                  <label for="createNombEmp" class="col-form-label col-form-label-sm">Nombres:</label>
                                  <input type="text" class="form-control form-control-sm" id="createNombEmp" name="createNombEmp" placeholder="Nombres">
                                </div>
                                <div class="form-group col-sm-3">
                                  <label for="createApeEmp" class="col-form-label col-form-label-sm">Apellidos:</label>
                                  <input type="text" class="form-control form-control-sm" id="createApeEmp" name="createApeEmp" placeholder="Apellidos">
                                </div>
                                <div class="form-group col-sm-6">
                                  <label for="createCargoEmp" class="col-form-label col-form-label-sm">Cargo:</label>
                                  <select class="form-control" id="createCargoEmp" name="createCargoEmp" style="width:100%">
                                    <option value="">Elije cargo</option>
                                    <?php $ctg = $con->query("SELECT * FROM cargo");
                                        while ($row = $ctg->fetch_assoc()) {
                                          echo "<option value='".$row['id_cargo']."' ";
                                          echo ">";
                                          echo $row['nom_cargo'];
                                          echo "</option>";
                                        }
                                    ?>
                                  </select>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-sm-3">
                                  <label for="createAreaEmp" class="col-form-label col-form-label-sm">Área:</label>
                                  <!-- <input type="text" class="form-control form-control-sm"  placeholder="Área"> -->
                                  <select class="form-control form-control-sm" id="createAreaEmp" name="createAreaEmp">
                                    <option value="">Elije una...</option>
                                    <?php $sd = $con->query("SELECT * FROM area");
                                        while ($row = $sd->fetch_assoc()) {
                                          echo "<option value='".$row['id_area']."' ";
                                          echo ">";
                                          echo $row['nom_area'];
                                          echo "</option>";
                                        }
                                    ?>
                                  </select>
                                </div>
                                <div class="form-group col-sm-3">
                                  <label for="createGerenEmp" class="col-form-label col-form-label-sm">Gerencia:</label>
                                  <!-- <input type="text" class="form-control form-control-sm"  placeholder="Gerencia"> -->
                                  <select class="form-control form-control-sm" id="createGerenEmp" name="createGerenEmp">
                                    <option value="">Elije una...</option>
                                    <?php $sd = $con->query("SELECT * FROM gerencia");
                                        while ($row = $sd->fetch_assoc()) {
                                          echo "<option value='".$row['id_gerencia']."' ";
                                          echo ">";
                                          echo $row['nom_gerencia'];
                                          echo "</option>";
                                        }
                                    ?>
                                  </select>
                                </div>
                                <div class="form-group col-sm-3">
                                  <label for="createSedeEmp" class="col-form-label col-form-label-sm">Sede:</label>
                                  <!-- <input type="text" class="form-control form-control-sm"  placeholder="Sede"> -->
                                  <select class="form-control form-control-sm" id="createSedeEmp" name="createSedeEmp">
                                    <option value="">Elije una...</option>
                                    <?php $sd = $con->query("SELECT * FROM sede");
                                        while ($row = $sd->fetch_assoc()) {
                                          echo "<option value='".$row['id_sede']."' ";
                                          echo ">";
                                          echo $row['nom_sede'];
                                          echo "</option>";
                                        }
                                    ?>
                                  </select>
                                </div>
                                <div class="form-group col-sm-3">
                                  <label for="createEstaEmp" class="col-form-label col-form-label-sm">Estado:</label>
                                  <select class="form-control form-control-sm" id="createEstaEmp" name="createEstaEmp">
                                    <option value="1" selected>Activo</option>
                                    <option value="0">Inactivo</option>
                                  </select>
                                </div>
                              </div>
                            </form>
                            <div class="row mt-3">
                              <div class="col-sm-12 text-right">
                                <button type="button" class="btn btn-success shadow-sm btn-sm px-3" id="btnCreateEmp"><i class="fas fa-save mr-2 mt-2 fa-sm text-white-50"></i>Guardar</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        <!-- <div class="row mt-3">
                          <div class="col-sm-12 text-right">
                            <button type="button" class="btn btn-primary btn-sm m-auto" id="btnCreateEmp"><i class="fas fa-save mr-2 fa-sm text-white-50"></i>Guardar</button>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Content Row -->

          </div>
        </div>
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
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tableEmp').load('../componentes/tableemp.php');
        // $('#createCargoEmp').select2({
        //   width: 'resolve',
        //   dropdownParent: $("#ModalNuevoEmp")
        // });
      });
    </script>
    <script>
      function obtenDatosEmp(idemp){
        $.ajax({
          url: '../procesos/empleado/readEmp.php',
          type: 'POST',
          data: "idemp=" + idemp,
          success:function(r){
            var datos = $.parseJSON(r);
            $('#editIdEmp').val(datos['idempphp']);
            $('#editNombEmp').val(datos['nomempphp']);
            $('#editApeEmp').val(datos['apempphp']);
            $('#EditCargoEmp').val(datos['cargoempphp']);
            $('#editEstaEmp').val(datos['estaempphp']);
            $('#EditAreaEmp').val(datos['arempphp']);
            $('#EditGerenciasEmp').val(datos['grempphp']);
            $('#EditSedesEmp').val(datos['sdempphp']);
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
      function deleteEmp(idemp){
        alertify.confirm("¿Seguro de BORRAR al empleado?.",
          function(){
             $.ajax({
              url: '../../public/procesos/empleado/deleteEmp.php',
              type: 'POST',
              data: "idemp=" + idemp,
              success:function(r){
               if (r==1) {
                $('#tableEmp').load('../componentes/tableemp.php');
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
