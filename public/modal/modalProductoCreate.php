<!-- Modal -->

<div class="modal fade" id="ModalNewProd" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-file mr-2"></i>Nuevo Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formCreateNewProd">
          <div class="row">
            <div class="col-sm-6">
              <p class="font-weight-bold"><i class="fas fa-user-edit mr-2"></i>Datos Básicos</p>
              <div class="form-group row mt-2">
                <label for="nombNewProd" class="col-sm-4 col-form-label col-form-label-sm">Equipo:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="nombNewProd" name="nombNewProd" placeholder="Ingrese el nombre...">
                </div>
              </div>
              <div class="form-group row">
                <label for="presentNewProd" class="col-sm-4 col-form-label col-form-label-sm">Tipo:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="presentNewProd" name="presentNewProd">
                    <option value="">Elije tipo equipo</option>
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
              <div class="form-group row">
                <label for="marcaNewProd" class="col-sm-4 col-form-label col-form-label-sm">Marca:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="marcaNewProd" name="marcaNewProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="modeloNewProd" class="col-sm-4 col-form-label col-form-label-sm">Modelo:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="modeloNewProd" name="modeloNewProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="sedeNewProd" class="col-sm-4 col-form-label col-form-label-sm">Sede</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="sedeNewProd" name="sedeNewProd">
                    <option value="1">S.E. 28 de Julio</option>
                    <option value="2">S.E. Leguia</option>
                    <option value="3">S.E. Para</option>
                    <option value="4">Moquegua</option>
                    <option value="5">Ilo</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="responNewProd" class="col-sm-4 col-form-label col-form-label-sm">Responsable:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="responNewProd" name="responNewProd">
                    <option value="">Elije a uno</option>
    								<?php $ctg = $con->query("SELECT * FROM empleado");
    										while ($row = $ctg->fetch_assoc()) {
    											echo "<option value='".$row['id_emp']."' ";
    											echo ">";
    											echo $row['nom_emp'];
                          echo " ";
                          echo $row['ape_emp'];
    											echo "</option>";
    										}
    								?>
                  </select>
                </div>
              </div>

            </div>
            <div class="col-sm-6">
              <p class="font-weight-bold"><i class="fas fa-user-cog mr-2"></i>Datos Técnicos</p>
              <div class="form-group row mt-2">
                <label for="serieNewProd" class="col-sm-4 col-form-label col-form-label-sm">Serie:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="serieNewProd" name="serieNewProd" placeholder="123...">
                </div>
              </div>
              <div class="form-group row">
                <label for="ipNewProd" class="col-sm-4 col-form-label col-form-label-sm">IP:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="ipNewProd" name="ipNewProd" placeholder="191.168.00.00">
                </div>
              </div>
              <div class="form-group row">
                <label for="macNewProd" class="col-sm-4 col-form-label col-form-label-sm">MAC:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="macNewProd" name="macNewProd" placeholder="00:00:00:00:00">
                </div>
              </div>
              <div class="form-group row">
                <label for="afNewProd" class="col-sm-4 col-form-label col-form-label-sm">AF:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="afNewProd" name="afNewProd">
                </div>
              </div>
              <div class="form-group row">
                <label for="catgNewProd" class="col-sm-4 col-form-label col-form-label-sm">Categoria:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="catgNewProd" name="catgNewProd">
                    <option value="">Elije producto</option>
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
              <div class="form-group row">
                <label for="estadoNewProd" class="col-sm-4 col-form-label col-form-label-sm">Estado</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="estadoNewProd" name="estadoNewProd">
                    <option value="Operativo">Operativo</option>
                    <option value="Prestado">Prestado</option>
                    <option value="Inoperativo">Inoperativo</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button>
        <button type="button" class="btn btn-primary btn-sm" id="btnCreateProd"><i class="fas fa-save mr-2 fa-sm text-white-50"></i>Guardar</button>
      </div>
    </div>
  </div>
</div>
