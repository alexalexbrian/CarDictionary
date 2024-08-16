$(document).ready(function() {

  $('#tabla').dataTable({

    "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ términos",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando términos del _START_ al _END_ de un total de _TOTAL_ términos",
        "sInfoEmpty":     "Mostrando términos del 0 al 0 de un total de 0 términos",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ terminos)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    },
    // "language": {
    //   "url": "//cdn.datatables.net/plug-ins/a5734b29083/i18n/Spanish.json",
    // },


    "bProcessing": true,
    "bServerSide": true,
    "sAjaxSource": "data.php",
    "iDisplayLength": 10,

    "aoColumnDefs": [
      {

        "aTargets": [ 4 ],
        "mData": "id",
        "mRender": function ( data, type, full ) {
          return '<a href="edit.php?id='+full[0]+'">Ver término</a>';
        }
      }
    ]

  }); // end datatable

}); // end document ready
