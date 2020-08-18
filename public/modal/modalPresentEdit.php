<!-- Modal -->
<div class="modal fade" id="modalEditPresentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Actualiza los Datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formUpdatePresentation">
              <input type="text" hidden="" name="idPresentEdit" id="idPresentEdit">
              <div class="form-group">
                <label for="nomPresentEdit" class="col-form-label col-form-label-sm">Nombre:</label>
                <input type="text" class="form-control form-control-sm" id="nomPresentEdit" name="nomPresentEdit">
              </div>
              <div class="form-group">
                <label for="desPresentEdit" class="col-form-label col-form-label-sm">Descripción:</label>
                <textarea class="form-control form-control-sm" name="desPresentEdit" id="desPresentEdit" rows="3"></textarea>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button>
        <button type="button" class="btn btn-warning btn-sm" id="btnEditPresent"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Actualizar</button>
      </div>
    </div>
  </div>
</div>