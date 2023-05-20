$( document ).ready(() => {
    mostrar();
});

function mostrar(){
    $.ajax({
    dataType: 'json',
    url: "http://localhost/prueba_e4cc/welcome/obtener"
    }).done(function (response) {

        const dataGrid = $('#gridContainer').dxDataGrid({
        dataSource: response['usuario'],
        keyExpr: 'idusuario',
        showBorders: true,
        customizeColumns(columns) {
            columns[0].width = 70;
        },
        scrolling: {
            rowRenderingMode: 'virtual',
        },
        paging: {
            pageSize: 10,
        },
        editing: {
            mode: 'row',
            allowUpdating: true,
            allowDeleting: true,
            allowAdding: true,
        },
        pager: {
            visible: true,
            allowedPageSizes: [5, 10, 'all'],
            showPageSizeSelector: true,
            showInfo: true,
            showNavigationButtons: true,
        },
        repaintChangesOnly: true,
        onSaving(e) {
            const change = e.changes[0];
            console.log(change)
            if (change) {
              e.cancel = true;
              e.promise = actualizarUsuario(change)
                .always(() => { loadPanel.hide(); })
                .then((data) => {
                  let orders = e.component.option('dataSource');
      
                  if (change.type === 'insert') {
                    change.data = data;
                  }
                  orders = DevExpress.data.applyChanges(orders, [change], { keyExpr: 'OrderID' });
      
                  e.component.option({
                    dataSource: orders,
                    editing: {
                      editRowKey: null,
                      changes: [],
                    },
                  });
                });
            }
          }
        }).dxDataGrid('instance');
    
        $('#displayMode').dxSelectBox({
        items: [{ text: "Display Mode 'full'", value: 'full' }, { text: "Display Mode 'compact'", value: 'compact' }],
        displayExpr: 'text',
        valueExpr: 'value',
        value: 'full',
        onValueChanged(data) {
            dataGrid.option('pager.displayMode', data.value);
            navButtons.option('disabled', data.value === 'compact');
        },
        });
        $('#showPageSizes').dxCheckBox({
        text: 'Show Page Size Selector',
        value: true,
        onValueChanged(data) {
            dataGrid.option('pager.showPageSizeSelector', data.value);
        },
        });
        
    }).fail(function( jqXHR ) {
        // Se evalua si la API respondio para dar una respuesta, sino se muestra un mensaje de error por consola
        if ( jqXHR.status == 200 ) {
            console.log( jqXHR.responseText );
        } else {
            console.log( jqXHR.status + ' ' + jqXHR.statusText );
        }
    });
}

function actualizarUsuario(form){
    $.ajax({
        url: "http://localhost/prueba_e4cc/welcome/editar",
        type: "post",
        dataType: "json",
        data: form,
        success: function(data) {

            if (data.response == "success") {
                // $('#exampleModal').modal('hide')
                $("#form-usuario")[0].reset();
                Command: toastr["success"](data.message)

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                mostrar();

            } else {
                Command: toastr["error"](data.message)

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }
        }
    });
}

$(document).on('click', '#guardar', function(e) {
    e.preventDefault();

    var perfil = $("#perfil").val();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var email = $("#email").val();
    var rol = $("#rol").val();
    var estado = $("#estado").val();

    $.ajax({
        url: "http://localhost/prueba_e4cc/welcome/agregar",
        type: "post",
        dataType: "json",
        data: {
            perfil_usuario: perfil,
            nombre: nombre,
            apellido: apellido,
            email: email,
            rol: rol,
            estado: estado,
        },
        success: function(data) {

            if (data.response == "success") {
                mostrar();
                // $('#exampleModal').modal('hide')
                $("#form-usuario")[0].reset();
                Command: toastr["success"](data.message)

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            } else {
                Command: toastr["error"](data.message)

                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
            }
        }
    });
});
