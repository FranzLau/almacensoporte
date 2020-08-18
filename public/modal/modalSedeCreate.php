<!-- Modal -->
<div class="modal fade" id="modalSedeCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Registra la Sede</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formNewSede">
              <div class="form-group row">
                <label for="nomNewSede" class="col-sm-3 col-form-label col-form-label-sm">Sede:</label>
                <div class="col-sm-9">
                  <input type="text" name="nomNewSede" id="nomNewSede" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label for="detalleNewSede" class="col-sm-3 col-form-label col-form-label-sm">Descripción:</label>
                <div class="col-sm-9">
                  <textarea name="detalleNewSede" id="detalleNewSede" aria-describedby="datesSede" placeholder="Escriba los detalles aquí..." class="form-control" rows="3" cols="50"></textarea>
                  <small id="datesSede" class="form-text text-muted">Todos los campos son obligatorios.</small>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnCreateSede"><i class="fas fa-save fa-sm mr-2"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>
