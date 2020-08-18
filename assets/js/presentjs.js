jQuery(document).ready(function() {
    $('#btnCreatePresentation').click(function() {
          vacios = validarFrmVacio('formNewPresentation');
          if(vacios > 0){
              alertify.error("Debe llenar todos los campos!");
              return false;
          }
          var datos=$('#formNewPresentation').serialize();
          $.ajax({
              url: '../../public/procesos/presentation/createPresent.php',
              type: 'POST',
              dataType: 'json',
              data: datos,
              success:function(){
  
              }
          })
          .done(function(r) {
              if (r==0) {
                    alertify.error("La Presentacion ya existe!");
              }else if(!r.error){
                    $('#tabPresent').load('../componentes/tablePresent.php');
                    $('#formNewPresentation')[0].reset();
                    alertify.success("Agregado con ÉXITO");
              }else{
                    alertify.error("ERROR al Registrar");
              }
          })
          .fail(function() {
              console.log("error");
          })
          .always(function() {
              console.log("complete");
          });
          return false;
      });
    //---------------------------UPDATE CATEGORIA---------------
    $('#btnEditPresent').click(function() {
          var datos=$('#formUpdatePresentation').serialize();
          $.ajax({
              url: '../../public/procesos/presentation/updatePresent.php',
              type: 'POST',
              dataType: 'json',
              data: datos,
              success:function(){
  
              }
          })
          .done(function(r) {
              if (!r.error) {
                    $('#tabPresent').load('../componentes/tablePresent.php');
                    alertify.success("Actualizado con ÉXITO");
              }else{
                    alertify.error("Error al Editar");
              }
          })
          .fail(function() {
              console.log("error");
          })
          .always(function() {
              console.log("complete");
          });
    });
  });