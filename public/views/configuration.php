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
    <?php include('../modal/modalEditCategory.php'); ?>
    <?php include('../modal/modalPresentEdit.php'); ?>
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
            <!-- Page Heading -->

            <div class="row">
              <div class="col-6 text-left">
                <a href="products.php" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-left mr-lg-2 fa-sm text-white-50"></i><span class="d-none d-lg-inline">Atras</span></a>
              </div>
              <div class="col-6">
                <ul class="nav nav-pills nav-pills-primary justify-content-end" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-cube mr-2 fa-sm"></i>Categorias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-cubes mr-2 fa-sm"></i>Presentacion</a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Content Row -->
            <div class="row mt-3">
              <div class="col-sm-12">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card shadow">
                          <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Registro de Categoria</h6>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <form id="formNewCategory">
                                  <div class="form-group">
                                    <label for="nomCateg" class="col-form-label col-form-label-sm">Categoria:</label>
                                    <input type="text" class="form-control form-control-sm" id="nomCateg" name="nomCateg" placeholder="Categoria Aquí...">
                                  </div>
                                  <div class="form-group">
                                    <label for="descCateg" class="col-form-label col-form-label-sm">Descripción:</label>
                                    <textarea class="form-control form-control-sm" name="descCateg" id="descCateg" rows="3" placeholder="Ingresa una descripción..."></textarea>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                  <button type="button" class="btn btn-success btn-sm px-3" id="btnCreateCategory"><i class="fas fa-save text-white-50 mr-2"></i>Guardar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="card shadow">
                          <div class="card-body">
                            <div id="tabCategory"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                    <!-- Content Row -->

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card shadow">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registrar Presentación</h6>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-sm-12">
                                <form id="formNewPresentation">
                                  <div class="form-group">
                                    <label for="nomPrest" class="col-form-label col-form-label-sm">Presentación:</label>
                                    <input type="text" class="form-control form-control-sm" id="nomPrest" name="nomPrest" placeholder="Categoria Aquí...">
                                  </div>
                                  <div class="form-group">
                                    <label for="descPrest" class="col-form-label col-form-label-sm">Descripción:</label>
                                    <textarea class="form-control form-control-sm" name="descPrest" id="descPrest" rows="3" placeholder="Ingresa una descripción..."></textarea>
                                  </div>
                                </form>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <button type="button" class="btn btn-sm btn-success px-3" id="btnCreatePresentation"><i class="fas fa-save text-white-50 mr-2"></i>Guardar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="card shadow">
                          <div class="card-body">
                            <div id="tabPresent"></div>
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
      </div>
      <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    </div>
    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->


    <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
    <?php include('scripts.php'); ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#tabCategory').load('../componentes/tableCategory.php');
        $('#tabPresent').load('../componentes/tablePresent.php');
      });
    </script>
    <script type="text/javascript">
      function ReadCategory(idcateg){
        $.ajax({
          url: '../../public/procesos/category/readCategory.php',
          type: 'POST',

          data: "idcateg=" + idcateg,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idCategEdit').val(datos['idCategory']);
            $('#nomCategEdit').val(datos['nomCategory']);
            $('#desCategEdit').val(datos['desCategory']);

          }
        })
        .done(function(r) {
          console.log(r);
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      }
      function deleteCategory(idcateg){
        alertify.confirm("¿Seguro de BORRAR este producto?.",
        function(){
           $.ajax({
            url: '../../public/procesos/category/deleteCategory.php',
            type: 'POST',
            data: "idcateg=" + idcateg,
            success:function(r){
             if (r==1) {
              $('#tabCategory').load('../componentes/tableCategory.php');
              alertify.success("Eliminaste con EXITO");
             }else{
              alertify.error("No se pudo Eliminar este producto");
             }
            }
          })
        },
        function(){
          alertify.warning('Estuviste a punto de Eliminar');
        });
      }
    </script>
    <script type="text/javascript">
      function ReadPresentation(idpret){
        $.ajax({
          url: '../../public/procesos/presentation/readPresent.php',
          type: 'POST',

          data: "idpret=" + idpret,
          success:function(r){
            var datos= $.parseJSON(r);
            $('#idPresentEdit').val(datos['idPresent']);
            $('#nomPresentEdit').val(datos['nomPresent']);
            $('#desPresentEdit').val(datos['desPresent']);

          }
        })
        .done(function(r) {
          console.log(r);
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
      }
      function deletePresent(idpret){
        alertify.confirm("¿Seguro de BORRAR?.",
        function(){
           $.ajax({
            url: '../../public/procesos/presentation/deletePresent.php',
            type: 'POST',
            data: "idpret=" + idpret,
            success:function(r){
             if (r==1) {
              $('#tabPresent').load('../componentes/tablePresent.php');
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
