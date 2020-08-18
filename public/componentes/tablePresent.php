<?php
  require '../../config/conexion.php';
  $sql = $con->query("SELECT * FROM presentacion ");
 ?>
 <div class="table-responsive" style="height: 300px; width: 100%;overflow-y: scroll;" >
   <table class="table table-sm table-hover" width="100%" cellspacing="0" id="tableCateg">
     <thead>
       <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>Descripción</th>
         <th class="text-center">Opciones</th>
       </tr>
     </thead>
     <tbody>
       <?php while($verpresent = $sql->fetch_row()){ ?>
         <tr>
           <td><?php echo $verpresent[0] ?></td>
           <td><?php echo $verpresent[1] ?></td>
           <td><?php echo $verpresent[2] ?></td>
           <td class="text-center">
             <a href="#" class="btn-link-edit mr-3" title="Editar" data-toggle="modal" data-target="#modalEditPresentation" onclick="ReadPresentation('<?php echo $verpresent[0] ?>')"><i class="fas fa-pencil-alt"></i></a>
             <a href="#" class="btn-link-delete" title="Eliminar" onclick="deletePresent('<?php echo $verpresent[0] ?>')"><i class="fas fa-trash-alt"></i></a>

           </td>
         </tr>
        <?php } ?>
     </tbody>
   </table>
 </div>
