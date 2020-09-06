 

 <div id="jsGrid1"></div>


 
<script>
$(document).ready(function() {

   $("#jsGrid1").jsGrid({

       height: "auto",
       width: "100%",

     sorting: true,
     paging: true,
     autoload: true,
     pageSize:10,
     pageButtonCount:5,
   
     deleteConfirm: "Quieres borrar esta locura",

     controller : {
     loadData: function (filter){
      // console.log(filter);
      return $.ajax({
        type: "GET",
        url: "dataEnf.php",
        data: filter,
        dataType: "json"
                  });
         }
 
    }, 
fields: [
   { name: "id", type: "text", align: "center", css: "hide"  },
   { name: "nombre"},
   { name: "area", title: "Área"},
   { name: "cuarto"},
   { name: "cama"},
   { name: "cedula", title: "Cédula"},
   { name: "diagnostico", title: "Diagnóstico"},
   { name: "procedencia"}
],

	


rowClick : function(args){
 document.location.href = "consultaEnf.php?id="+args.item['id'];
},

sortorder: "desc",
sortname : "id",
noDataContent : "Sin datos",
pagerFormat: "Página: {first} {prev} {pages} {next} {last}    {pageIndex} de {pageCount}",
pagePrevText: "Previo",
pageNextText: "Siguiente",
pageFirstText: "Primero",
pageLastText: "Último"
  
   });

  });
</script>