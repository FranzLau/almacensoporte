<?php
  session_start();
  require '../../config/conexion.php';
  require '../../config/data.php';
  $obj = new data();
  $sql = $con->query("SELECT * FROM sede");
 ?>
 <div class="table-responsive">
   <table class="table table-hover table-sm" id="tableSedes" width="100%" cellspacing="0">
     <thead>
       <tr>
         <th>ID</th>
         <th>NOMBRE</th>
         <th>DESCRIPCION</th>
         <th>OPCIONES</th>
       </tr>
     </thead>
     <tfoot>
       <tr>
         <th>ID</th>
         <th>NOMBRE</th>
         <th>DESCRIPCION</th>
         <th>OPCIONES</th>
       </tr>
     </tfoot>
     <tbody>
       <?php while($versede = $sql->fetch_row()){ ?>
       <tr>
         <td><?php echo $versede[0] ?></td>
         <td><?php echo $versede[1] ?></td>
         <td><?php echo $versede[2] ?></td>
         <td>
            <a href="#" class="btn-link-edit mr-3" title="Editar" data-toggle="modal" data-target="#ModalUpdateSede" onclick="ReadSedes('<?php echo $versede[0] ?>')"><i class="fas fa-pencil-alt"></i></a>
            <?php
             if ($_SESSION['loginUser']['tipo_user'] == "administrador"):
            ?>
            <a href="#" class="btn-link-delete" title="Eliminar" onclick="deleteSedes('<?php echo $versede[0] ?>')"><i class="fas fa-trash-alt"></i></a>

            <?php endif; ?>
         </td>
       </tr>
       <?php } ?>
     </tbody>
   </table>
 </div>
 <script>
   $(document).ready(function() {
     $('#tableSedes').DataTable({
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
