function load(page){
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'pacientesDr_ajax.php',
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
 
