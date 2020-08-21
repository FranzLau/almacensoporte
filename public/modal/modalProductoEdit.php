<!-- Modal -->
<div class="modal fade" id="ModalUpdateProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="formUpdateNewProd">
          <input type="text" name="idEditProd" id="idEditProd" hidden>

          <!-- Fila 1 Form -->
          <div class="row">
            <!-- COLUMNA 1 Form -->
            <div class="col-sm-6">
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="ctgsEditeProd" class="col-form-label col-form-label-sm col-sm-4">Categoria:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="ctgsEditeProd" name="ctgsEditeProd" style="width:100%">

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
              </div>

              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="cantEditProd" class=" col-form-label col-form-label-sm col-sm-4">Cantidad:</label>
                <div class="col-sm-4">
                  <input type="number" class="form-control form-control-sm" id="cantEditProd" name="cantEditProd">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="descEditProd" class="col-form-label col-form-label-sm col-sm-4">Nombre :</label>
                <div class="col-sm-8">
                  <input type="text"  class="form-control form-control-sm" name="descEditProd" id="descEditProd">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="card mb-3">
                <div class="card-body border-left-warning">
                  <div class="form-group row mb-0">
                    <label for="ramEditProd" class="col-form-label col-form-label-sm col-sm-2">RAM</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm" id="ramEditProd" name="ram_EditProd">
                    </div>
                    <label for="diskEditProd" class="col-form-label col-form-label-sm col-sm-2">Disk:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm" id="diskEditProd" name="disk_EditProd">
                    </div>
                  </div>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
            </div>
            <!-- COLUMNA 2 Form -->
            <div class="col-sm-6">
              <div class="form-group row">
                <label for="serieEditProd" class="col-form-label col-form-label-sm col-sm-2">Serie:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="serieEditProd" name="serieEditProd">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="marcaEditProd" class="col-form-label col-form-label-sm col-sm-2">Marca:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="marcaEditProd" name="marcaEditProd">
                </div>
                <label for="modeloEditProd" class="col-form-label col-form-label-sm col-sm-2">Modelo:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="modeloEditProd" name="modeloEditProd">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <!-- <div class="form-group row">

              </div> -->
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="af1EditProd" class="col-form-label col-form-label-sm col-sm-2">Activo:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="af1EditProd" name="af1EditProd">
                </div>
                <label for="af2EditProd" class="col-form-label col-form-label-sm col-sm-2">Activo2:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="af2EditProd" name="af2EditProd">
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <!-- <div class="form-group row">

              </div> -->
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="estadoEditProd" class="col-form-label col-form-label-sm col-sm-4">Estado:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="estadoEditProd" name="estadoEditProd">
                    <option value="1">Operativo</option>
                    <option value="0">Inoperativo</option>
                  </select>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="preseEditeProd" class="col-form-label col-form-label-sm col-sm-4">Contrato:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="preseEditeProd" name="preseEditeProd" style="width:100%">
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
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
            </div>
            <!-- FIN Columna 2 Form -->
          </div>

          <!-- FIN Fila Form -->

        </form><!-- Fin de Form -->

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button> -->
        <button type="button" class="btn btn-warning btn-sm" id="btnUpdateProdu"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Editar</button>
      </div>
    </div>
  </div>
</div>
