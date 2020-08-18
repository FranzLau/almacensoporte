jQuery(document).ready(function() {
  $('#btnCreateGerencia').click(function() {
    vacios = validarFrmVacio('formNewGerencia');
    if(vacios > 0){
      alertify.error("Debe llenar todos los campos!");
      return false;
    }
    var datos=$('#formNewGerencia').serialize();
    $.ajax({
      url: '../../public/procesos/gerencia/createGerencia.php',
      type: 'POST',
      dataType: 'json',
      data: datos,
      success:function(){

      }
    })
    .done(function(r) {
      if (r==0) {
        alertify.error("La Gerencia ya existe!");
      }else if(!r.error){
        $('#tableGerence').load('../componentes/tableGerence.php');
        $('#formNewGerencia')[0].reset();
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

  //---------------------------UPDATE GERENCIA---------------
  $('#btnUpdateGerencia').click(function() {
		var datos=$('#formUpdateGerencias').serialize();
		$.ajax({
			url: '../../public/procesos/gerencia/updateGerencia.php',
			type: 'POST',
			dataType: 'json',
			data: datos,
			success:function(){

			}
		})
		.done(function(r) {
			if (!r.error) {
			  $('#tableGerence').load('../componentes/tableGerence.php');
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
