jQuery(document).ready(function() {
  $('#btnCreateSede').click(function() {
    vacios = validarFrmVacio('formNewSede');
    if(vacios > 0){
      alertify.error("Debe llenar todos los campos!");
      return false;
    }
    var datos=$('#formNewSede').serialize();
    $.ajax({
      url: '../../public/procesos/sede/createSede.php',
      type: 'POST',
      dataType: 'json',
      data: datos,
      success:function(){

      }
    })
    .done(function(r) {
      if (r==0) {
        alertify.error("La Sede ya existe!");
      }else if(!r.error){
        $('#tableSede').load('../componentes/tableSede.php');
        $('#formNewSede')[0].reset();
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

  //---------------------------UPDATE SEDE---------------
  $('#btnUpdateSede').click(function() {
		var datos=$('#formUpdateSede').serialize();
		$.ajax({
			url: '../../public/procesos/sede/updateSede.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
			  $('#tableSede').load('../componentes/tableSede.php');
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
