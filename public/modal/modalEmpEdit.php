<!-- Modal EDITAR EMPLEADO-->
<div class="modal fade" id="ModalEditarEmp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Editar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <form id="formUpdateEmp">
              <input type="text" name="editIdEmp" id="editIdEmp" name="editIdEmp" hidden>
              <div class="form-group row">
                <label for="editNombEmp" class="col-sm-3 col-form-label col-form-label-sm">Nombres:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="editNombEmp" name="editNombEmp">
                </div>
              </div>
              <div class="form-group row">
                <label for="editApeEmp" class="col-sm-3 col-form-label col-form-label-sm">Apellidos:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="editApeEmp" name="editApeEmp">
                </div>
              </div>
              <div class="form-group row">
                <label for="EditCargoEmp" class="col-sm-3 col-form-label col-form-label-sm">Cargo:</label>
                <div class="col-sm-9">
                  <select class="form-control form-control-sm" id="EditCargoEmp" name="EditCargoEmp">
                    <option value="">Elije producto</option>
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
                <label for="EditAreaEmp" class="col-sm-3 col-form-label col-form-label-sm">Area:</label>
                <div class="col-sm-9">
                  <select class="form-control form-control-sm" id="EditAreaEmp" name="EditAreaEmp">
                    <option value="">Elije producto</option>
    								<?php $ctg = $con->query("SELECT * FROM area");
    										while ($row = $ctg->fetch_assoc()) {
    											echo "<option value='".$row['id_area']."' ";
    											echo ">";
    											echo $row['nom_area'];
    											echo "</option>";
    										}
    								?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="EditGerenciasEmp" class="col-sm-3 col-form-label col-form-label-sm">Gerencia:</label>
                <div class="col-sm-9">
                  <select class="form-control form-control-sm" id="EditGerenciasEmp" name="EditGerenciasEmp">
                    <option value="">Elije producto</option>
    								<?php $ctg = $con->query("SELECT * FROM gerencia");
    										while ($row = $ctg->fetch_assoc()) {
    											echo "<option value='".$row['id_gerencia']."' ";
    											echo ">";
    											echo $row['nom_gerencia'];
    											echo "</option>";
    										}
    								?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="EditSedesEmp" class="col-sm-3 col-form-label col-form-label-sm">Sede:</label>
                <div class="col-sm-9">
                  <select class="form-control form-control-sm" id="EditSedesEmp" name="EditSedesEmp">
                    <option value="">Elije producto</option>
    								<?php $ctg = $con->query("SELECT * FROM sede");
    										while ($row = $ctg->fetch_assoc()) {
    											echo "<option value='".$row['id_sede']."' ";
    											echo ">";
    											echo $row['nom_sede'];
    											echo "</option>";
    										}
    								?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="editEstaEmp" class="col-sm-3 col-form-label col-form-label-sm">Estado:</label>
                <div class="col-sm-9">
                  <select class="form-control form-control-sm" id="editEstaEmp" name="editEstaEmp">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-sm" id="btnUpdateEmp"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Editar</button>
      </div>
    </div>
  </div>
</div>
