<!-- Modal -->
<div class="modal fade" id="modalGerenciaCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Registra el Gerencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formNewGerencia">
              <div class="form-group row">
                <label for="nomNewGerencia" class="col-sm-3 col-form-label col-form-label-sm">Gerencia:</label>
                <div class="col-sm-9">
                  <input type="text" name="nomNewGerencia" id="nomNewGerencia" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label for="detalleNewGerencia" class="col-sm-3 col-form-label col-form-label-sm">Descripción:</label>
                <div class="col-sm-9">
                  <textarea name="detalleNewGerencia" id="detalleNewGerencia" aria-describedby="datesGeren" placeholder="Escriba los detalles aquí..." class="form-control" rows="3" cols="50"></textarea>
                  <small id="datesGeren" class="form-text text-muted">Todos los campos son obligatorios.</small>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnCreateGerencia"><i class="fas fa-save fa-sm mr-2"></i> Guardar</button>
      </div>
    </div>
  </div>
</div>
