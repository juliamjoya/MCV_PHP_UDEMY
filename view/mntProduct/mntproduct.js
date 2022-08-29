var table;

function init() {}

$(document).ready(function () {
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
