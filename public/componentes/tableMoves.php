<?php
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM movimiento GROUP BY id_move");
 ?>
<div class="table-responsive">
  <table class="table table-sm table-hover datatable-wide" id="tableMovimiento" width="100%" cellspacing="0">
    <thead class="bg-white">
      <tr>
        <th>FOLIO</th>
        <th>FECHA</th>
        <th>ORIGEN</th>
        <th>DESTINO</th>
        <th>OBSERVACION</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>FOLIO</th>
        <th>FECHA</th>
        <th>ORIGEN</th>
        <th>DESTINO</th>
        <th>OBSERVACION</th>
        <th class="text-center">ACCIONES</th>
      </tr>
    </tfoot>
    <tbody>
      <?php while($verMov = $sql->fetch_row()){ ?>
        <tr>
          <td><?php echo $verMov[0] ?></td>
          <td><?php echo $verMov[1] ?></td>
          <td><?php echo $obj->nombEmpleado($verMov[2]) ?></td>
          <td><?php echo $obj->nombEmpleado($verMov[3]) ?></td>
          <td><?php echo $verMov[4] ?></td>
          <td class="text-center">
            <!-- <a href="#" class="badge badge-outline-danger" data-toggle="modal" data-target="#modalCloseBox" onclick="obtenDataOpenbox('<?php echo $verDom[0] ?>')"><i class="fas fa-exclamation-circle mr-2"></i>Abierta</a> -->

            <a href="../../procesos/ventas/crearReportepdf.php?idventa=<?php echo $verMov[0] ?>" class="btn-link-delete">
              <i class="fas fa-file-pdf"></i>
            </a>
          </td>
        </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableMovimiento').DataTable({
      "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página",
        "zeroRecords": "Nada encontrado, lo siento!",
        "info": "Mostrando página _PAGE_ de _PAGES_",
        "infoEmpty": "No hay registros disponibles",
        "infoFiltered": "(filtered from _MAX_ total records)",
        "search": "Buscar",
        "paginate": {
          "first":      "Primero",
          "previous":   "Anterior",
          "next":       "Siguiente",
          "last":       "Último"
        }
      }
    });
  });
</script>
