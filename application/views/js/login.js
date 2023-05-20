$( document ).ready(() => {
    
});

$(document).on('click','#loginB', function (e) {
	e.preventDefault();

	let  usuario = $("#usuario").val();
	let  contrasena = $("#contrasena").val();

			$.ajax({
				url: "http://localhost/pueba_e4cc/login/log",
				type: "post",
				dataType: "json",
				data: {
					usuario: usuario,
					contrasena: contrasena
				}
			}).done(function (data) {
				
			}).fail(function( jqXHR ) {
				// Se evalua si la API respondio para dar una respuesta, sino se muestra un mensaje de error por consola
				if ( jqXHR.status == 200 ) {
					console.log( jqXHR.responseText );
				} else {
					console.log( jqXHR.status + ' ' + jqXHR.statusText );
				}
			});
	

	// $("form-login").dxForm({
	// 	formData: vista,
    //             colCount: 2,
    //             items: [{
    //                 dataField: "usuario",
    //                 label: { text: "Usuario" },
    //                 editorType: "dxTextBox",
    //                 editorOptions: {
    //                     placeholder: "Ingrese su nombre de usuario"
    //                 }
    //             }, {
    //                 dataField: "contrasena",
    //                 label: { text: "Contraseña" },
    //                 editorType: "dxTextBox",
    //                 editorOptions: {
    //                     placeholder: "Ingrese su contraseña",
    //                     mode: "password"
    //                 }
    //             }, {
    //                 itemType: "button",
    //                 horizontalAlignment: "right",
    //                 buttonOptions: {
    //                     text: "Iniciar sesión",
    //                     onClick: function () {
    //                         viewModel.login();
    //                     }
    //                 }
    //             }]
	// });
});
