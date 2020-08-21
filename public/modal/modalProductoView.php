<!-- Modal -->
<div class="modal fade" id="ModalViewProd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold text-primary" id="exampleModalCenterTitle"><i class="fas fa-desktop mr-2"></i>Detalles de Equipo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id="formUpdateNewProd">
          <input type="text" name="id_ViewProd" id="id_ViewProd" hidden>

          <!-- Fila 1 Form -->
          <div class="row">
            <!-- COLUMNA 1 Form -->
            <div class="col-sm-6">
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="ctgsViewProd" class="col-form-label col-form-label-sm col-sm-4">Categoria:</label>
                <div class="col-sm-8">
                  <input type="text"class="form-control form-control-sm" id="ctgsViewProd" name="ctgsViewProd" disabled>
                </div>
              </div>

              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="cantViewProd" class=" col-form-label col-form-label-sm col-sm-4">Cantidad:</label>
                <div class="col-sm-4">
                  <input type="number" class="form-control form-control-sm" id="cantViewProd" name="cantViewProd" disabled>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="descViewProd" class="col-form-label col-form-label-sm col-sm-4">Nombre :</label>
                <div class="col-sm-8">
                  <input type="text"  class="form-control form-control-sm" name="descViewProd" id="descViewProd" disabled>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="card mb-3">
                <div class="card-body border-left-info">
                  <div class="form-group row mb-0">
                    <label for="ramViewProd" class="col-form-label col-form-label-sm col-sm-2">RAM</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm" id="ramViewProd" name="ram_ViewProd" disabled>
                    </div>
                    <label for="diskViewProd" class="col-form-label col-form-label-sm col-sm-2">Disk:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm" id="diskViewProd" name="disk_ViewProd" disabled>
                    </div>
                  </div>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
            </div>
            <!-- COLUMNA 2 Form -->
            <div class="col-sm-6">
              <div class="form-group row">
                <label for="serieViewProd" class="col-form-label col-form-label-sm col-sm-2">Serie:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control form-control-sm" id="serieViewProd" name="serieViewProd" disabled>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="marcaViewProd" class="col-form-label col-form-label-sm col-sm-2">Marca:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="marcaViewProd" name="marcaViewProd" disabled>
                </div>
                <label for="modeloViewProd" class="col-form-label col-form-label-sm col-sm-2">Modelo:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="modeloViewProd" name="modeloViewProd" disabled>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <!-- <div class="form-group row">

              </div> -->
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="af1ViewProd" class="col-form-label col-form-label-sm col-sm-2">Activo:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="af1ViewProd" name="af1ViewProd" disabled>
                </div>
                <label for="af2ViewProd" class="col-form-label col-form-label-sm col-sm-2">Activo2:</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control form-control-sm" id="af2ViewProd" name="af2ViewProd" disabled>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <!-- <div class="form-group row">

              </div> -->
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->

              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="estadoView_Prod" class="col-form-label col-form-label-sm col-sm-4">Estado:</label>
                <div class="col-sm-8">
                  <select class="form-control form-control-sm" id="estadoView_Prod" name="estadoView_Prod" disabled>
                    <option value="1">Operativo</option>
                    <option value="0">Inoperativo</option>
                  </select>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
              <div class="form-group row">
                <label for="preseView_Prod" class="col-form-label col-form-label-sm col-sm-4">Contrato:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="preseView_Prod" name="preseView_Prod" disabled>
                </div>
              </div>
              <!--<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
            </div>
            <!-- FIN Columna 2 Form -->
          </div>

          <!-- FIN Fila Form -->

        </form><!-- Fin de Form -->

      </div>
      <!-- <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fas fa-times mr-2 fa-sm text-white-50"></i>Cancelar</button> -->
        <!--<button type="button" class="btn btn-warning btn-sm" id="btnUpdateProdu"><i class="fas fa-pen mr-2 fa-sm text-white-50"></i>Editar</button>
      </div> -->
    </div>
  </div>
</div>
