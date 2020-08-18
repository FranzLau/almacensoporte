<!-- Modal -->
<div class="modal fade" id="ModalUpdateGerencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Actualizar el Gerencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formUpdateGerencias">
              <input type="text" name="idEditGerencia" id="idEditGerencia" hidden>
              <div class="form-group row">
                <label for="nomEditGerencia" class="col-sm-3 col-form-label col-form-label-sm">Gerencia:</label>
                <div class="col-sm-9">
                  <input type="text" name="nomEditGerencia" id="nomEditGerencia" class="form-control form-control-sm">
                </div>
              </div>
              <div class="form-group row">
                <label for="detalleEditGerencia" class="col-sm-3 col-form-label col-form-label-sm">Descripción:</label>
                <div class="col-sm-9">
                  <textarea name="detalleEditGerencia" id="detalleEditGerencia" aria-describedby="datesArea" placeholder="Escriba los detalles aquí..." class="form-control" rows="3" cols="50"></textarea>
                  <!-- <small id="datesArea" class="form-text text-muted">Todos los campos son obligatorios.</small> -->
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="btnUpdateGerencia"><i class="fas fa-pen fa-sm mr-2"></i> Editar</button>
      </div>
    </div>
  </div>
</div>
