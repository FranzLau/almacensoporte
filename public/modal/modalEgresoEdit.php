<!-- Modal -->
<div class="modal fade" id="modalRetiroEditer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Cargo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formEditerEgreso">
              <input type="text" name="idEditCargo" id="idEditCargo" hidden>
              <div class="form-group row">
                <label for="nomEditCargo" class="col-sm-3 col-form-label col-form-label-sm">Descripcion:</label>
                <div class="col-sm-9">
                  <input type="text" name="nomEditCargo" id="nomEditCargo" class="form-control form-control-sm">
                  
                </div>
              </div>
              <div class="form-group row">
                <label for="detEditCargo" class="col-sm-3 col-form-label col-form-label-sm">Detalles:</label>
                <div class="col-sm-9">
                  <textarea name="detEditCargo" id="detEditCargo" class="form-control" rows="3" cols="50"></textarea>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning w-100" id="btnEditEgreso"><i class="fas fa-pen mr-2"></i>Actualizar</button>
      </div>
    </div>
  </div>
</div>
