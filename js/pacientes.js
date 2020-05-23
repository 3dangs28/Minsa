function load(page){
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'pacientes_ajax.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader").html("<img src='giphy.gif'>");
        },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
        } 
    })
}

    $('#dataUpdate').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var cedula = button.data('cedula') // Extraer la información de atributos de datos
      var nombre1 = button.data('nombre1') // Extraer la información de atributos de datos
      var nombre2 = button.data('nombre2') // Extraer la información de atributos de datos
      var apellido1 = button.data('apellido1') // Extraer la información de atributos de datos
      var apellido2 = button.data('apellido2') // Extraer la información de atributos de datos
      var gen = button.data('gen') // Extraer la información de atributos de datos
      var tel = button.data('tel') // Extraer la información de atributos de datos
      var estado = button.data('estado') // Extraer la información de atributos de datos
      

      var modal = $(this)
      modal.find('.modal-title').text('Modificar paciente: '+nombre1)
      modal.find('.modal-body #id').val(id)
      modal.find('.modal-body #cedula').val(cedula)
      modal.find('.modal-body #nombre1').val(nombre1)
      modal.find('.modal-body #nombre2').val(nombre2)
      modal.find('.modal-body #apellido1').val(apellido1)
      modal.find('.modal-body #apellido2').val(apellido2)
      modal.find('.modal-body #gen').val(gen)
      modal.find('.modal-body #tel').val(tel)
      modal.find('.modal-body #estado').val(estado)
      $('.alert').hide();//Oculto alert
    })
    
    $('#dataDelete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var modal = $(this)
      modal.find('#id').val(id)
    })

    
$( "#actualidarDatos" ).submit(function( event ) {
    var parametros = $(this).serialize();
         $.ajax({
                type: "POST",
                url: "miembros/modificar.php",
                data: parametros,
                 beforeSend: function(objeto){
                    $("#datos_ajax").html("Mensaje: Cargando...");
                  },
                success: function(datos){
                $("#datos_ajax").html(datos);
                
                load(1);
              }
        });
      event.preventDefault();
    });
     

    
    $( "#eliminarDatos" ).submit(function( event ) {
    var parametros = $(this).serialize();
         $.ajax({
                type: "POST",
                url: "miembros/eliminar.php",
                data: parametros,
                 beforeSend: function(objeto){
                    $(".datos_ajax_delete").html("Mensaje: Cargando...");
                  },
                success: function(datos){
                $(".datos_ajax_delete").html(datos);
                
                $('#dataDelete').modal('hide');
                load(1);
              }
        });
      event.preventDefault();
    });