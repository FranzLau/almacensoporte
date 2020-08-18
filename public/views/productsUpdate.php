<?php
  session_start();
  require '../../config/conexion.php';
  $idpc = $_GET['idpc'];
	$sql = $con->query("SELECT * FROM equipo WHERE id_equipo= '$idpc' ");
	$result = $sql->fetch_row();
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

            <!-- Page Heading -->

            <div class="row">
              <div class="col-6 text-left d-flex">
                <!-- <h4 class="page-title my-auto">EGRESOS</h4> -->
                <h1 class="h3 mb-0 text-gray-800">Equipo: <?php echo $result[1]; ?></h1>
              </div>
              <div class="col-6 mt-md-0 text-right">
                <a href="products.php" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Atras</span></a>
                <!-- <button type="button" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalRetiroCreate"><i class="fas fa-plus mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Nuevo Cargo</span></button> -->
              </div>
            </div>

            <!-- Content Row -->
            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-laptop mr-2"></i>Datos del Equipo</h6>
                    <div class="no-arrow">
                      <!-- <a href="#"><i class="fas fa-plus-circle fa-fw text-gray-400"></i></a> -->
                      <button type="button" class="btn btn-sm btn-warning shadow-sm mr-2" data-toggle="modal" data-target="#modalRetiroCreate"><i class="fas fa-pen fa-sm"></i></button>
                      <button type="button" disabled class="btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#modalRetiroCreate"><i class="fas fa-save fa-sm"></i></button>
                    </div>
                  </div>
                  <div class="card-body">


                    <form id="formCreateNewProd">

                      <!-- Fila 1 Form -->
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="ctgEditProd" class="col-form-label col-form-label-sm">Categoria:</label>
                          <select class="form-control form-control-sm" id="ctgEditProd" name="ctgEditProd" style="width:100%" disabled value="<?php echo $result[9]; ?>">
                            <option value="">Elije categoria</option>
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
                        <div class="form-group col-md-3">
                          <label for="serieEditProd" class="col-form-label col-form-label-sm">Serie:</label>
                          <input type="text" class="form-control form-control-sm" id="serieEditProd" name="serieEditProd" disabled value="<?php echo $result[1]; ?>">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="marcaEditProd" class="col-form-label col-form-label-sm">Marca:</label>
                          <input type="text" class="form-control form-control-sm" id="marcaEditProd" name="marcaEditProd" disabled value="<?php echo $result[2]; ?>">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="modeloEditProd" class="col-form-label col-form-label-sm">Modelo:</label>
                          <input type="text" class="form-control form-control-sm" id="modeloEditProd" name="modeloEditProd" disabled value="<?php echo $result[3]; ?>">
                        </div>
                      </div>

                      <!-- Fila 2 Form -->

                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="af1EditProd" class="col-form-label col-form-label-sm">Activo:</label>
                          <input type="text" class="form-control form-control-sm" id="af1EditProd" name="af1EditProd" disabled value="<?php echo $result[4]; ?>">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="af2EditProd" class="col-form-label col-form-label-sm">Activo 2:</label>
                          <input type="text" class="form-control form-control-sm" id="af2EditProd" name="af2EditProd" disabled value="<?php echo $result[5]; ?>">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="catgNewProd" class="col-form-label col-form-label-sm">Presentacion:</label>
                          <select class="form-control form-control-sm" id="presentNewProd" name="presentNewProd" style="width:100%">
                            <option value="">Elije el tipo...</option>
                            <?php $ctg = $con->query("SELECT * FROM presentacion");
                                while ($row = $ctg->fetch_assoc()) {
                                  echo "<option value='".$row['id_presentacion']."' ";
                                  echo ">";
                                  echo $row['nom_presentacion'];
                                  echo "</option>";
                                }
                            ?>
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="estadoNewProd" class="col-form-label col-form-label-sm">Estado</label>
                          <select class="form-control form-control-sm" id="estadoNewProd" name="estadoNewProd">
                            <option value="Operativo">Operativo</option>
                            <option value="Prestado">Prestado</option>
                            <option value="Inoperativo">Inoperativo</option>
                          </select>
                        </div>
                      </div>


                      <!-- Fila 3 Form -->

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="respNewProd" class="col-form-label col-form-label-sm">Responsable:</label>

                          <select class="form-control form-control-sm" id="respNewProd" name="respNewProd" style="width:100%">
                            <option value="">Elije uno...</option>
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
                        <div class="form-group col-md-2">
                          <label for="ubicNewProd" class="col-form-label col-form-label-sm">Ubicación:</label>
                          <!-- <textarea class="form-control form-control-sm" rows="3"></textarea> -->
                          <!-- <input type="text" class="form-control form-control-sm" id="ubicNewProd" name="ubicNewProd"> -->
                          <select class="form-control form-control-sm" id="ubicNewProd" name="ubicNewProd">
                            <option value="Almacén">Almacén</option>
                            <option value="Oficina">Oficina</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="obsNewProd" class="col-form-label col-form-label-sm">Detalles:</label>
                          <!-- <textarea class="form-control form-control-sm" rows="3"></textarea> -->
                          <input type="text" class="form-control form-control-sm" id="obsNewProd" name="obsNewProd">
                        </div>

                      </div>



                    </form><!-- Fin de Form -->

                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>
        <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
  </body>
</html>
<?php
  }else{
    header('Location: ../../');
  }
?>
