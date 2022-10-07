var table;

function init(){
  $("#productForm").on("submit",function(e){
    editSaveProduct(e);
  });
}

$(document).ready(function () {
  $.post("../../controller/category.php?op=combo", function (data){
    $("#cat_id").html(data);
  });


  table = $("#tableProducts")
    .dataTable({
      aProcessing: true, //Activamos el procesamiento del datatables
      aServerSide: true, //Paginacion y filtrado realizados por el servidor
      dom: "Bfrtip", //Definimos los elementos del control de la tabla
      buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf"],
      ajax: {
        url: "../../controller/product.php?op=list",
        type: "get",
        dataType: "json",
        error: function (e) {
          console.log(e.responseText);
        },
      },
      bDestroy: true,
      responsive: true,
      bInfo: true,
      iDisplayLength: 10, //Por cada 10 registros hace una paginacion
      order: [[0, "asc"]], //Ordenar (columna, orden)
      language: {
        sProcessing: "Procesando...",
        sLengthMenu: "Mostrar _MENU_ registros",
        sZeroRecords: "No se encontraron resultados",
        sEmptyTable: "Ningún dato disponible en esta tabla",
        sInfo: "Mostrando _TOTAL_ registros en total",
        sInfoEmpty: "Mostrando 0 registros en total",
        sInfoFiltered: "(filtrado de un tota de _MAX_ registros)",
        sInfoPostFix: "",
        sSearch: "Buscar:",
        sUrl: "",
        sInfoThousands: ",",
        sLoadingRecords: "Cargando...",
        oPaginate: {
          sFirst: "Primero",
          sLast: "Ultimo",
          sNext: "Siguiente",
          sPrevious: "Anterior",
        },
        oAria: {
          sSortAscending:
            ": Activar para ordenar la columna de manera ascendente",
          sSortDescending:
            ": Activar para ordenar la columna de manera descendente",
        },
      },
    })
    .DataTable();
});

function editSaveProduct(e){
  e.preventDefault();
  var formData = new FormData($("#productForm")[0]);

  //Ayuda a verificar cuales datos captura la variable formData
  // for(var valueData of formData.entries()){
  //   console.log(valueData[0]+' - '+valueData[1]);
  // }

  //console.log("Los datos de formData son: " + formData);

  $.ajax({
    url: "../../controller/product.php?op=editSaveProduct",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function(datos){
      //console.log(datos);
      $("#productForm")[0].reset();
      $("#modalmaintenance").modal('hide');
      $("#tableProducts").DataTable().ajax.reload();

      Swal.fire(
        'Producto',
        'El registro se guardo correctamente',
        'success'
      )
    }
  });
}

function editProduct(prod_id){
  $('#mdlTitulo').html('Editar Producto');

  $.post("../../controller/product.php?op=showProduct",{prod_id:prod_id},function(data){
    data = JSON.parse(data);
    $('#prod_id').val(data.prod_id);
    $('#cat_id').val(data.cat_id).trigger('change');
    $('#prod_nom').val(data.prod_name);
    $('#prod_desc').val(data.prod_desc);
    $('#prod_cant').val(data.prod_cant);
  });

  $('#modalmaintenance').modal('show');
}

function deleteProduct(prod_id){
  Swal.fire({
    title: 'Eliminar Producto',
    text: '¿Desea eliminar el producto?',
    icon: 'error',
    showCancelButton: true,
    confirmButtonText: 'Si',
    cancelButtonText: 'No',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33'
  }).then((result) => {
    if (result.isConfirmed) {
      $.post("../../controller/product.php?op=deleteProduct",{prod_id:prod_id},function(data){});
      $('#tableProducts').DataTable().ajax.reload();
      // console.log(prod_id)
      Swal.fire(
        'Producto Eliminado',
        'El producto se elimino correctamente',
        'success'
      )
    }
  })
}

$(document).on("click","#btnNewProduct", function(){
  $('#mdlTitulo').html('Nuevo Producto');
  $("#productForm")[0].reset();
  $('#prod_id').val('');
  /* $('#cat_id').val('');
  $('#prod_nom').val('');
  $('#prod_desc').val('');
  $('#prod_cant').val(''); */
  $('#modalmaintenance').modal('show');
});

init();
