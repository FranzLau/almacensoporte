<!-- Modal -->
<div class="modal fade" id="modalRetiroCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Registra el Cargo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formNewEgreso">
              <div class="form-group row">
                <label for="nomNewCargo" class="col-sm-3 col-form-label col-form-label-sm">Nombre:</label>
                <div class="col-sm-9">
                  <input type="text" name="nomNewCargo" id="nomNewCargo" class="form-control form-control-sm">

                </div>
              </div>
              <div class="form-group row">
                <label for="detalleNewCargo" class="col-sm-3 col-form-label col-form-label-sm">Descripción:</label>
                <div class="col-sm-9">
                  <textarea name="detalleNewCargo" id="detalleNewCargo" aria-describedby="datesRetiro" placeholder="Escriba los detalles aquí..." class="form-control" rows="3" cols="50"></textarea>
                  <small id="datesRetiro" class="form-text text-muted">Todos los campos son obligatorios.</small>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnCreateEgreso"><i class="fas fa-save fa-sm mr-2"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>
