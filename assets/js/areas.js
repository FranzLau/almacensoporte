jQuery(document).ready(function() {
  $('#btnCreateArea').click(function() {
    vacios = validarFrmVacio('formNewArea');
    if(vacios > 0){
      alertify.error("Debe llenar todos los campos!");
      return false;
    }
    var datos=$('#formNewArea').serialize();
    $.ajax({
      url: '../../public/procesos/area/createArea.php',
      type: 'POST',
      dataType: 'json',
      data: datos,
      success:function(){

      }
    })
    .done(function(r) {
      if (r==0) {
        alertify.error("El Área ya existe!");
      }else if(!r.error){
        $('#tableArea').load('../componentes/tableArea.php');
        $('#formNewArea')[0].reset();
        alertify.success("Agregado con Éxito");
      }else{
        alertify.error("Error al Registrar");
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
  //---------------------------UPDATE AREA---------------
  $('#btnUpdateAreas').click(function() {
		var datos=$('#formUpdateAreas').serialize();
		$.ajax({
			url: '../../public/procesos/area/updateArea.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
			  $('#tableArea').load('../componentes/tableArea.php');
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
