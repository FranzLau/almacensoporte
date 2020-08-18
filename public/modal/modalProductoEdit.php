<!-- Modal -->
<div class="modal fade" id="ModalUpdateProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar datos del Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="formUpdateNewProd">
          <input type="text" name="idEditProd" id="idEditProd" hidden>

          <!-- Fila 1 Form -->

          <div class="form-row">

            <div class="form-group col-sm-6">
              <label for="descEditProd" class="col-form-label col-form-label-sm">Descripcion:</label>
              <input type="text"  class="form-control form-control-sm" name="descEditProd" id="descEditProd">
            </div>

            <div class="form-group col-sm-2">
              <label for="cantEditProd" class=" col-form-label col-form-label-sm">Cantidad:</label>
              <input type="number" class="form-control form-control-sm" id="cantEditProd" name="cantEditProd">
            </div>

          </div>

          <!-- Fila 2 Form -->

          <div class="form-row">

            <div class="form-group col-sm-3">
              <label for="ctgsEditeProd" class="col-form-label col-form-label-sm">Categoria:</label>
              <select class="form-control form-control-sm" id="ctgsEditeProd" name="ctgsEditeProd" style="width:100%">
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

            <div class="form-group col-sm-3">
              <label for="serieEditProd" class="col-form-label col-form-label-sm">Serie:</label>
              <input type="text" class="form-control form-control-sm" id="serieEditProd" name="serieEditProd">
            </div>

            <div class="form-group col-sm-3">
              <label for="marcaEditProd" class="col-form-label col-form-label-sm">Marca:</label>
              <input type="text" class="form-control form-control-sm" id="marcaEditProd" name="marcaEditProd">
            </div>

            <div class="form-group col-sm-3">
              <label for="modeloEditProd" class="col-form-label col-form-label-sm">Modelo:</label>
              <input type="text" class="form-control form-control-sm" id="modeloEditProd" name="modeloEditProd">
            </div>


          </div>

          <!-- Fila 3 Form -->

          <div class="form-row">

            <div class="form-group col-sm-3">
              <label for="af1EditProd" class="col-form-label col-form-label-sm">Activo:</label>
              <input type="text" class="form-control form-control-sm" id="af1EditProd" name="af1EditProd">
            </div>

            <div class="form-group col-sm-3">
              <label for="af2EditProd" class="col-form-label col-form-label-sm">Activo2:</label>
              <input type="text" class="form-control form-control-sm" id="af2EditProd" name="af2EditProd">
            </div>

            <div class="form-group col-sm-3">
              <label for="preseEditeProd" class="col-form-label col-form-label-sm">Contrato:</label>
              <select class="form-control form-control-sm" id="preseEditeProd" name="preseEditeProd" style="width:100%">
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

            <div class="form-group col-sm-3">
              <label for="estadoEditProd" class="col-form-label col-form-label-sm">Estado:</label>
              <select class="form-control form-control-sm" id="estadoEditProd" name="estadoEditProd">
                <option value="1">Operativo</option>
                <option value="0">Inoperativo</option>
              </select>
            </div>

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
