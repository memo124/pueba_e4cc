<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CRUD CI 3</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="application/views/css/usuario.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	</head>
	<body>
		<div class="container">
			<!-- Título de oa página -->
			<div class="row">
				<h2>Usuarios</h2>
			</div>

			<!-- Formulario -->
			<!-- <div class="mb-5"> -->
				<form action="" method="post" id="form-usuario">
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="perfil">Perfil</label>
							<input type="text" name="perfil" class="form-control" required placeholder="Perfil" id="perfil">
						</div>
						<div class="form-group col-sm-4">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" class="form-control" required placeholder="nombre" id="nombre">
						</div>
						<div class="form-group col-sm-4">
							<label for="apellido">Apellido</label>
							<input type="text" name="apellido" class="form-control" required placeholder="apellido" id="apellido">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-4">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control" required placeholder="email" id="email">
						</div>
						<div class="form-group col-sm-4">
							<label for="rol">Rol</label>
							<select class="form-select" aria-label="Default select example" id="rol" name="rol">
								<option selected>Open this select menu</option>
								<option value="1">Administrador</option>
								<option value="2">Usuario</option>
							</select>
						</div>
						<div class="form-group col-sm-4">
							<label for="estado">Estado</label>
							<select class="form-select" aria-label="Default select example" id="estado" name="estado">
								<option selected>Open this select menu</option>
								<option value="1">Activo</option>
								<option value="0">Inactivo</option>
							</select>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block" id="guardar">Guardar</button>
				</form>
			</div>
			
			<!-- Tabla de datos -->
			<div class="container">
				<div class="row">
					<div class="card col-12">
						<div class="card-header">
							<h4>Tabla de personas</h4>
						</div>
						<hr>
						<div class="container">
							<div class="demo-container">
								<div id="data-grid-demo">
									<div id="gridContainer"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<!-- DevExtreme theme -->
		<link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/22.2.6/css/dx.light.css">
		<!-- DevExtreme library -->
		<script type="text/javascript" src="https://cdn3.devexpress.com/jslib/22.2.6/js/dx.all.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript" src="application/views/js/usuario.js"></script>
		<script>
			let url = "<?php echo base_url('welcome/editar'); ?>";
			const llenar_datos = (idusuario, perfil, nombre, apellido, email, rol, estado) => {
				let path = url+"/"+idusuario;
				document.getElementById('form-usuario').setAttribute('action', path);
				document.getElementById('perfil').value = perfil;
				document.getElementById('nombre').value = nombre;
				document.getElementById('apellido').value = apellido;
				document.getElementById('email').value = email;
				document.getElementById('rol').value = rol;
				document.getElementById('estado').value = estado;
			};

			
		</script>
	</body>
</html>