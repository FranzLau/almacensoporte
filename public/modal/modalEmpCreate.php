<!-- Modal NUEVO EMPLEADO-->
<div class="modal fade" id="ModalNuevoEmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Agregar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formCreateEmp">
              <div class="form-group row">
                <label for="createNombEmp" class="col-sm-3 col-form-label col-form-label-sm">Nombres:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="createNombEmp" name="createNombEmp" placeholder="Nombres">
                </div>
              </div>
              <div class="form-group row">
                <label for="createApeEmp" class="col-sm-3 col-form-label col-form-label-sm">Apellidos:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="createApeEmp" name="createApeEmp" placeholder="Apellidos">
                </div>
              </div>
              <div class="form-group row">
                <label for="createCargoEmp" class="col-sm-3 col-form-label col-form-label-sm">Cargo:</label>
                <div class="col-sm-9">
                  <select class="form-control form-control-sm" id="createCargoEmp" name="createCargoEmp" style="width:100%;z-index:999999">
                    <option value="">Elije cargo</option>
    								<?php $ctg = $con->query("SELECT * FROM cargo");
    										while ($row = $ctg->fetch_assoc()) {
    											echo "<option value='".$row['id_cargo']."' ";
    											echo ">";
    											echo $row['nom_cargo'];
    											echo "</option>";
    										}
    								?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="createEstaEmp" class="col-sm-3 col-form-label col-form-label-sm">Estado:</label>
                <div class="col-sm-9">
                  <!-- <input type="text" class="form-control form-control-sm"  value="1"> -->
                  <select class="form-control form-control-sm" id="createEstaEmp" name="createEstaEmp">
                    <option value="1" selected>Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button>
        <button type="button" class="btn btn-primary btn-sm" id="btnCreateEmp"><i class="fas fa-save mr-2 fa-sm text-white-50"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>
