
<body class="hold-transition sidebar-mini">

<?php include("inc/header.php"); ?>
<?php include("inc/menu.php"); ?>




<div class="wrapper">
  <!-- Navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 

    
    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">jsGrid</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div id="jsGrid1"></div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jsGrid -->
<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->

<script>

// function busqueda() {
/*
$.post("data.php", {
       tipo: 1
   },
   function(data2) {
     gato(data2);
   });

}
*/

$(document).ready(function() {
//$(function ()  {
 /*
var db ={
 loadData: function (filter){
   var data: $.Deferred();
   $.ajax({
     type: "GET",
     contentType: "application/json",
     url: "data.php",
     dataType: "json",
     data: filter
   }).done(function (response) {
     data.resolve(response.d);
   });
   return data.promise();
 }
};
*/

// var obj = jQuery.parseJSON(result);
// console.log(obj);
   $("#jsGrid1").jsGrid({
     /*
       url: "/data.php",
       dataType: "json",
       mtype: "GET",
       */
       height: "auto",
       width: "100%",

     //  inserting: true,
     //  editing: true,

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
        url: "data.php",
        data: filter,
        dataType: "json"
                  });
         }
         /*,
     insertItem: function (item){
      return $.ajax({
        type: "POST",
        url: "pilli.php",
        data: item,
     
       });
      }*/
    },
fields: [
   { name: "id", type: "text", align: "center", },
   { name: "Nombre"},
   { name: "Apellido"},
   { name: "Cedula"},
   { name: "Address"}
],

rowClick : function(args){
 document.location.href = "pilli.php?id="+args.item['id'];
},

sortorder: "desc",
sortname : "id",
noDataContent : "Sin datos",
pagerFormat: "Página: {first} {prev} {pages} {next} {last}    {pageIndex} de {pageCount}",
pagePrevText: "Previo",
pageNextText: "Siguiente",
pageFirstText: "Primero",
pageLastText: "Último"
    /*   colNames: [
         "id","Nombre","Apellido","Cedula","Address"
       ],
       colModel: [
           { name: "id"},
           { name: "Nombre"},
           { name: "Apellido"},
           { name: "Cedula"},
           { name: "Address"}
       ],
      // data: db,
     /*  controller:{
         loadData: function(filter){
           return $.ajax({url:"data.php", data:filter});
         }
       },
 */
   //    controller : db,
 //  fields: [
     // pager: "#perpage",
     /*
      rowNum:10,
      rowList:[10,20],

  
    
       viewrecords: true,
       gridview : true,
       caption: ""
       */
   });

  });
</script>

</body>
</html>
