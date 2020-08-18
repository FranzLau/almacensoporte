<?php
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM dominio");
 ?>
<div class="table-responsive">
  <table class="table table-sm table-hover datatable-wide" id="tableBox" width="100%" cellspacing="0">
    <thead class="bg-white">
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>SERIE</th>
        <th>RESPONSABLE</th>
        <th>CARGO</th>
        <th>IP</th>
        <th>MAC</th>
        <th>ACCIONES</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>SERIE</th>
        <th>RESPONSABLE</th>
        <th>CARGO</th>
        <th>IP</th>
        <th>MAC</th>
        <th>ACCIONES</th>
      </tr>
    </tfoot>
    <tbody>
      <?php while($verDom = $sql->fetch_row()){ ?>
        <tr>
          <td><?php echo $verDom[0] ?></td>
          <td><?php echo $verDom[1] ?></td>
          <td><?php echo $obj->nombEmpleado($verDom[6]) ?></td>
          <td><?php echo $obj->nombEmpleado($verDom[7]) ?></td>
          <td><?php echo $verDom[5] ?></td>
          <td><?php echo $verDom[2] ?></td>
          <td><?php echo $verDom[3] ?></td>
          <td>
            <a href="#" class="badge badge-outline-danger" data-toggle="modal" data-target="#modalCloseBox" onclick="obtenDataOpenbox('<?php echo $verDom[0] ?>')"><i class="fas fa-exclamation-circle mr-2"></i>Abierta</a>
          </td>
        </tr>
       <?php } ?>
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#tableBox').DataTable({
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
