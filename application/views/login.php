<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CRUD CI 3</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="application/views/css/login.css">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	</head>
	<body>
		<div class="container">
			<div class="wrapper fadeInDown">
				<div id="formContent">
					<div style="padding-top: 50px;">
						<form action="" method="post" id="form-login">
							<input type="text" id="usuario" class="form-control"  placeholder="usuario">
							<input type="text" id="contrasena" class="form-control"  placeholder="contraseña">
							<button type="button" class="btn btn-primary" id="loginB">Ingresar</button>
						</form>
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
		<script type="text/javascript" src="application/views/js/login.js"></script>
	</body>
</html>
